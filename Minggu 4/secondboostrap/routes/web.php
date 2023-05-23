<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;

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

// Rute ini mengatur bahwa saat pengguna mengakses URL /home menggunakan metode HTTP GET, fungsi index() yang terdapat dalam kelas HomeController akan dijalankan.
Route::get('/home', [HomeController::class, 'index']);

// Rute ini menggunakan metode HTTP GET dan diarahkan ke fungsi index() yang ada dalam kelas DashboardController.
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::group(['namespace'=>'Backend'], function()
{
    Route::resource('dashboard','DashboardController');
    Route::resource('pendidikan', 'PendidikanController');
    Route::resource('pengalaman_kerja', 'PengalamanKerjaController');
});
// /dashboard - Rute ini akan diarahkan ke fungsi-fungsi yang ada dalam kelas DashboardController di dalam namespace 'Backend'.
// /pendidikan - Rute ini akan diarahkan ke fungsi-fungsi yang ada dalam kelas PendidikanController di dalam namespace 'Backend'. 
// /pengalaman_kerja - Rute ini akan diarahkan ke fungsi-fungsi yang ada dalam kelas PengalamanKerjaController di dalam namespace 'Backend'.