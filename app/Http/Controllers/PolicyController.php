<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Policy;

class PolicyController extends Controller
{
    function PolicyBytype(Request $request)
    {
        return Policy::where('type', $request->type)->first();
    }
}
