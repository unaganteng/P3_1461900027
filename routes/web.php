<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
    return view('welcome');
});
    Route::get('/pelanggan',[MahasiswaController::class, 'index']);
    Route::get('/pelanggan/tambah',[MahasiswaController::class,'tambah']);
    Route::get('/pelanggan/cari', [MahasiswaController::class,'cari']);
    Route::get('/pelanggan/ruang', [MahasiswaController::class,'ruang']);
    Route::get('/pelanggan/edit/{id}', [MahasiswaController::class, 'edit']);
    Route::post('/pelanggan/store',[MahasiswaController::class, 'store']);
    Route::get('/pelanggan/hapus/{id}',[MahasiswaController::class,'hapus']);
    Route::post('/pelanggan/update', [MahasiswaController::class, 'update']);
