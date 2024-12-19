<?php

use App\Http\Controllers\NdkSessionController;


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

//#Test session
Route::get('/ndk-session/get', ([NdkSessionController::class, 'ndkgetSessionData']))->name('ndksession.get');
Route::get('/ndk-session/set', ([NdkSessionController::class, 'ndkStoreSessionData']))->name('ndksession.set');
Route::get('/ndk-session/del', ([NdkSessionController::class, 'ndkDeleteSessionData']))->name('ndksession.del');

#Account
Route::get ('/ndk-login',[NdkAccountController::class,'ndkLogin'])->name('ndkaccount.ndkLogin');

