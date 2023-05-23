<?php

use App\Http\Controllers\UploadController;
use GuzzleHttp\Psr7\UploadedFile;
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

// Mengarahkan permintaan GET ke metode upload dalam UploadController.
Route::get('/upload', [UploadController::class, 'upload'])->name('upload');

// Mengarahkan permintaan POST ke metode proses_upload dalam UploadController.
Route::post('/upload/proses', [UploadController::class, 'proses_upload'])->name('upload.proses');

// Mengarahkan permintaan POST ke metode resize_upload dalam UploadController.
Route::post('/upload/resize_image', [UploadController::class, 'resize_upload'])->name('upload.resize');

// Mengarahkan permintaan GET ke metode dropzone dalam UploadController.
Route::get('/dropzone', [UploadController::class, 'dropzone'])->name('dropzone');

// Mengarahkan permintaan POST ke metode dropzone_store dalam UploadController.
Route::post('/dropzone/store', [UploadController::class, 'dropzone_store'])->name('dropzone.store');

// Mengarahkan permintaan GET ke metode pdf_upload dalam UploadController.
Route::get('/pdf_upload', [UploadController::class, 'pdf_upload'])->name('pdf.upload');

// Mengarahkan permintaan POST ke metode pdf_store dalam UploadController.
Route::post('/pdf/store', [UploadController::class, 'pdf_store'])->name('pdf.store');
