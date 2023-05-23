<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SessionController;
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
    return view('welcome');
});

// Menampilkan halaman untuk membuat data sesi.
Route::get('/session/create', [SessionController::class, 'create']);

// Menampilkan data sesi yang ada.
Route::get('/session/show', [SessionController::class, 'show']);

// Menghapus data sesi yang ada.
Route::get('/session/delete', [SessionController::class, 'delete']);

// Menampilkan halaman dengan daftar pegawai berdasarkan nama yang diberikan.
Route::get('/index/{nama}', [PegawaiController::class, 'index']);

// Menampilkan halaman dengan daftar pegawai berdasarkan nama yang diberikan menggunakan segment URI.
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index_segment']);

// Memproses data yang dikirimkan melalui formulir dan mengarahkan pengguna ke halaman hasil.
Route::get('/form', [PegawaiController::class, 'formulir']);
Route::post('/form/result', [PegawaiController::class, 'proses'])->name('form-proses');
