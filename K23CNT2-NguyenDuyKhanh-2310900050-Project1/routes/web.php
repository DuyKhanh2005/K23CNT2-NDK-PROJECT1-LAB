<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ndk_loai_san_pham_controller;
/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/ndkLogin',[ndkQuanTriController::class,'ndkLogin'])-> name('admin.ndkLogin');
Route::post('/admin/ndkLogin',[ndkQuanTriController::class,'ndkLoginSumbit'])-> name('admin.ndkSumbit');

// Routes cho phần quản trị sản phẩm
Route::prefix('ndk-admins')->group(function () {
    // Route để hiển thị danh sách loại sản phẩm
    Route::get('ndk_loai_san_pham', [ndk_loai_san_pham_controller::class, 'ndkList'])->name('ndkAdmins.ndkloaisanpham.list');

    // Route để hiển thị chi tiết loại sản phẩm
    Route::get('ndk_loai_san_pham/{ndkMaLoai}', [ndk_loai_san_pham_controller::class, 'show'])->name('ndkAdmins.ndkloaisanpham.show');

    Route::get('ndk_loai_san_pham/ndk-create', [ndk_loai_san_pham_controller::class, 'ndkCreate'])->name('ndkAdmins.ndkloaisanpham.create');

});

