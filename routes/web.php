<?php

use App\Http\Controllers\EncoderController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FormBuilderController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
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

Route::get('/', [EncoderController::class, 'encode']);
Route::get('file', [FileController::class, 'download']);
Route::get('publish', [MessageController::class, 'publish']);
Route::get('form-builder', [FormBuilderController::class, 'output']);
Route::get('documents', [ReportController::class, 'printReport']);
Route::get('products', [ProductController::class, 'presentProduct']);
Route::get('pay',[PaymentController::class, 'pay']);
Route::get('notifications',[NotificationController::class, 'notify']);
Route::get('post',[PostController::class, 'publish']);
