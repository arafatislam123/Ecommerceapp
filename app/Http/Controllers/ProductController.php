<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductSlider;
use App\Helper\ResponseHelper;
use App\Models\ProductDetails;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function  ListProductByCategory(Request $request): JsonResponse
    {
       $data=Product::where('category_id',$request->category_id)->get();
       return ResponseHelper::Out('success',$data,200);
    }
    public function  ListProductByBrand(Request $request): JsonResponse
    {
       $data=Product::where('brand_id',$request->brand_id)->get();
       return ResponseHelper::Out('success',$data,200);
    }
    public function ListProductByRemark(Request $request): JsonResponse
    {
       $data=Product::where('remark',$request->remark)->get();
       return ResponseHelper::Out('success',$data,200);
    }
    public function ListProductSlider(): JsonResponse
    {
       $data=ProductSlider::all();
       return ResponseHelper::Out('success',$data,200);
    }
   
}
