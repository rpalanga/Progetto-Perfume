<?php

use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\PerfumeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/brands', [BrandController::class,'index']);
Route::get('/perfumes', [PerfumeController::class,'index']);
