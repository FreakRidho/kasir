<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminKategoriContoller;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    $data = [
        'content'   => 'admin.dashbord.index'
    ];
    return view('admin.layouts.wrapper', $data);
});

Route::prefix('/admin')->group(function(){
    Route::resource('/kategori', AdminKategoriContoller::class);
    Route::resource('/user', AdminUserController::class);
});
    