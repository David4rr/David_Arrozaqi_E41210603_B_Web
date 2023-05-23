<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;

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

//Untuk penamaan url 
Route::get('/user', [ManagementUserController::class, 'index']);
Route::get('/', function () {
    $nama = "David Arrozaqi";
    $pelajaran = ["Workshop Sistem Informasi Web Framework", "Workshop Mobile Applications", "Literasi Digital"];
    return view('home', compact('nama', 'pelajaran'));
});


