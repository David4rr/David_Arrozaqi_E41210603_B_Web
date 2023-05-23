<?php

use App\Http\Controllers\ProfileController;
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

// Pada route ini, diterapkan dua middleware yaitu auth dan verified. Middleware auth memastikan bahwa pengguna harus sudah terotentikasi (login) untuk dapat mengakses halaman dashboard. Sedangkan middleware verified memastikan bahwa pengguna harus sudah melakukan verifikasi email sebelum diizinkan mengakses halaman dashboard.
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Dengan menggunakan grup route dan middleware 'auth', semua route di dalam grup ini hanya dapat diakses oleh pengguna yang sudah terotentikasi (login).
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
