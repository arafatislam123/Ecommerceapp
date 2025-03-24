<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function CategoryList(): \Illuminate\Http\JsonResponse
   {
       $data = Category::all();
       return ResponseHelper::Out('success', $data, 200);
   }
}
