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

Route::get('/test', function () {
    return view('test');
});

Route::get('/ndk-view1', function () {
    return view('ndk-view1',['name'=>"K23CNT2 - PROJECT1 - NGUYEN DUY KHANH"]);
});

Route::get('/ndk-view2', function () {
    return view('ndk-view2',[
        'name'=>"K23CNT2 - PROJECT1 - NGUYEN DUY KHANH",
        'array'=> [1,3,2,6,9]
    ]);
});

Route::get('/ndk-view3', function () {
    return view('ndk-view3',[
        'name' => ["NGUYEN","DUY","KHANH"],
        'arr'=> [12,22,21,33,55,35],
        'user'=> []
    ]);
});

use App\Http\Controllers\ViewdemoController;

Route::get('/view-4', [ViewdemoController::class, 'view4'])->name('viewdemo.view4');

