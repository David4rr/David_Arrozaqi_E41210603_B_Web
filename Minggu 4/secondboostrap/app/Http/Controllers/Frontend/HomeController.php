<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Untuk menampilkan halaman home
class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
}
