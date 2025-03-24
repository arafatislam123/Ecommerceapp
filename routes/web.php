<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;

Route::get('/Brandlist',[BrandController::class,'Brandlist']);
Route::get('/Categorylist',[CategoryController::class,'Categorylist']);
Route::get('/ListProductByCategory/{category_id}',[CategoryController::class,'ListProductByCategory']);
Route::get('/ListProductByBrand/{brand_id}',[BrandController::class,'ListProductByBrand']);