<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products/store', [ProductController::class, 'store']);
Route::get('/products/store/{id}', [ProductController::class, 'show']);
Route::get('/products/update/{id}', [ProductController::class, 'update']);
Route::get('/products/destroy/{id}', [ProductController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
