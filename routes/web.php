<?php

use App\Http\Controllers\UserController;
use Illuminate\Routing\Router;
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

Route::get('/produk', function () {
    return view('produk');
});


Route::get('/produk',[UserController::class,'asep']);

Route::get('/',[UserController::class,'no2']);

Route::get('/produk', function (Request $request) {
    return view('$produk');
});

