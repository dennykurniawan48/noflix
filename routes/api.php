<?php

use App\Http\Controllers\api\Login;
use App\Http\Controllers\api\Movie;
use App\Http\Controllers\api\Register;
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

Route::apiResource('register', Register::class)->only('store');
Route::apiResource('login', Login::class)->only('store');
Route::apiResource('movies', Movie::class)->only('index', 'show');