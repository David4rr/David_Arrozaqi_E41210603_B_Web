<?php

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
//! Route yang tersedia
// Metode Route tersedia beberapa macam seperti :
// Route::post()
// Route::put()
// Route::delete()
// Route::get()
Route::get('/', function () {
    return view('welcome');
});

//! Metode CSRF Protection
// <form metode="POST" action="/profile">
//@csrf
//*Disini data yang dilindungi oleh csrf ...
// </form>

//! Redirect Route
Route::get('/tes2', function () {
    return "Ini hasil dari tes2";
});

Route::redirect('/tes1', '/tes2');
// Ketika kita memasukan url/tes1 maka akan dialihkan ke url/tes2

//! Route View
Route::view('/welcome', 'welcome');
// Ini adalah contoh sederhanda dari Route View
Route::view('/welcome', 'welcome', ['name' => 'David']);
// Route view juga bisa ditambahkan argument nanti nilainya akan keluar pada viewnya
