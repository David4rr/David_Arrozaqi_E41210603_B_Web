<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Untuk menampilkan halaman dashboard
class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }
}
