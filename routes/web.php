<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/gaji',[GajiController::class,'index']);
Route::get('/gaji/tambah',[GajiController::class,'tambah']);
Route::post('/gaji/tambah',[GajiController::class,'simpan']);

Route::get('/absensi', [AbsensiController::class, 'index_absen']);
Route::get('/absensi/tambah', [AbsensiController::class, 'tambah_absen']);
Route::post('/absensi/tambah', [AbsensiController::class, 'simpan_absen']);

Route::get('/absensi/edit/{edit}', [AbsensiController::class, 'edit']);
Route::post('/absensi/edit/{edit}', [AbsensiController::class, 'update']);
Route::get('/absensi/hapus/{edit}', [AbsensiController::class, 'hapus']);


Route::get('/karyawan',[KaryawanController::class,'index']);
Route::get('/karyawan/tambah',[KaryawanController::class,'tambah']);
Route::post('/karyawan/tambah',[KaryawanController::class,'simpan']);

Route::get('/jabatan',[JabatanController::class,'index']);
Route::get('/jabatan/tambah',[JabatanController::class,'tambah']);
Route::post('/jabatan/tambah',[JabatanController::class,'simpan']);


Route::get('/jabatan/edit/{edit}', [AbsensiController::class, 'edit']);
Route::post('/jabatan/edit/{edit}', [AbsensiController::class, 'update']);
Route::get('/jabatan/hapus/{edit}', [AbsensiController::class, 'hapus']);