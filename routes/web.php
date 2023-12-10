<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Home::class, 'index'])->name('home.index')->middleware('auth');
Route::resource('login', Login::class)->only(['index', 'store']);
Route::get('/logout', [Login::class, 'logout'])->name('logout');
Route::resource('register', Register::class)->only(['index', 'store']);
Route::get('/{id}', [Home::class, 'show']);