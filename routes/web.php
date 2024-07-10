<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NhtController;
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
//Base url : http://127.0.0.1:8000/
Route::get('/', function () {
    echo "Trang chủ";
});

// Điêu hướng qua action của controller
// php artisan make:controller Tên Controller

Route::get('list-product', [ProductController::class, 'showProduct']);
// Gửi dữ liệu qua controller
// slug
// http://127.0.0.1:8000/get-product/1
Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);

// Params
// http://127.0.0.1:8000/update-product?id=4&name=iphone
Route::get('update-product', [ProductController::class, 'updateProduct']);


// Lap 1
Route::get('thongtinsv', [NhtController::class, 'showInfo']);

