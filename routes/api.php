<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('teste', function (Request $request) {
    return "URL de teste";
});
Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return auth()->user();
    });
    Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);
    Route::post('/products', [App\Http\Controllers\ProductController::class, 'store']);
    Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show']);
});
