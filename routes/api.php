<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;

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
//categories route
Route::get('/categories', [CategoryController::class,"get"]);



//auth routes
Route::post('/register', [AuthController::class,"register"]);
Route::post('/login', [AuthController::class,"login"]);
Route::post('/verify', [AuthController::class,"verify"]);
Route::post('/logout', [AuthController::class,"logout"])->middleware('auth:sanctum');
