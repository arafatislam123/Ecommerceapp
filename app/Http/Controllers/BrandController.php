<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function BrandList(): JsonResponse
    {
        $data = Brand::all();
        return response()->json([
            'status' => 'success',
            'data' => $data
        ], 200);
    }
}
