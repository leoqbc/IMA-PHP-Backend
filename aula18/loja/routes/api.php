<?php

use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\ProductController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [LoginController::class, 'login']);

// localhost:8000/api/products
Route::post('/products', [ProductController::class, 'create']);

Route::get('/products/{id}', [ProductController::class, 'getProduct']);

Route::get('/products', [ProductController::class, 'getAll']);

Route::put('/products/{id}', [ProductController::class, 'update']);

Route::post('/products/profile', [ProductController::class, 'uploadProfile']);

Route::delete('/products/{id}', [ProductController::class, 'delete']);

Route::get('/storage/{path}', function (string $path) {
    $storeUrl = 'public/products/';
    $imagem = Storage::get($storeUrl . $path);
    $mime = Storage::mimeType($storeUrl . $path);
    
    return response($imagem, 200)
            ->header('Content-Type', $mime);
});