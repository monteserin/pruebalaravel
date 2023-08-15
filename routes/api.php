<?php

use App\Http\Controllers\Api\BrandsController;
use App\Http\Controllers\Api\DigitalActionsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/brands/{id}', [BrandsController::class, 'getById']);
Route::get('/brands/', [BrandsController::class, 'index']);
Route::get('/digital-actions/', [DigitalActionsController::class, 'index']);
Route::get('/digital-actions/{id}', [DigitalActionsController::class, 'getByBrandId']);

// Route::resource('brand', BrandController::class)->except(['create', 'edit']);
