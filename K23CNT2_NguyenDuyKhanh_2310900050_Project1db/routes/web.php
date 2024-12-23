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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/addmins/ndk-login', [NDK_QuanTri_Controller::class, 'ndkLogin'])->name('admins.ndkLogin');
Route::post('/addmins/ndk-login', [NDK_QuanTri_Controller::class, 'ndkLoginSubmit'])->name('admins.ndkLoginSubmit');

#Addmin routes
Route::get('/ndk-admins', function () {
    return view('ndkAdmins.index');
});