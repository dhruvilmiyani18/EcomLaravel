<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Nette\Utils\Json;
use App\Http\Controllers\ApiController\CategoryController;
use App\Http\Controllers\ApiController\ProductController;
use App\Http\Controllers\ApiController\UserContntroller;
use App\Http\Controllers\ApiController\UserController;
use Illuminate\Routing\RouteGroup;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login',[UserController::class, 'login']);


Route::middleware('auth:api')->group(function () { 
    Route::post('/categories', [CategoryController::class, 'index']);
    Route::post('/product', [ProductController::class, 'index']);
    
});
