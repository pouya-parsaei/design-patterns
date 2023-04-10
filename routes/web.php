<?php

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

Route::get('/',[\App\Http\Controllers\EncoderController::class,'encode']);
Route::get('/file',[\App\Http\Controllers\FileController::class,'download']);
Route::get('/publish',[\App\Http\Controllers\MessageController::class,'publish']);
