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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function () {
    return 'Hello World';
});

// Default Root
Route::get('/user', 'UserController@index');

Route::match(['get', 'post'], '/', function () {
    //
});


//Redirect Route
Route::redirect('/here', '/there', 301);

Route::permanentredirect('/here', '/there');

//* Route View
Route::view('/welcome', 'welcome');
Route::view('/slebew', 'welcome', ['name' => 'David']);
