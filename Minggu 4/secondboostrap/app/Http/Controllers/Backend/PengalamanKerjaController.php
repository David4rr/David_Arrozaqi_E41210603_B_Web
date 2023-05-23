<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengalamanKerjaController extends Controller
{
    // digunakan untuk menampilkan halaman indeks pengalaman kerja.
    public function index()
    {
        return view('backend.pengalaman_kerja.index');
    }
    // digunakan untuk menampilkan halaman pembuatan pengalaman kerja baru.
    public function create()
    {
        $pengalaman_kerja = null;
        return view('backend.pengalaman_kerja.create', compact('pengalaman_kerja'));
    }
    // digunakan untuk menyimpan data pengalaman kerja baru ke dalam database
    public function store(Request $request)
    {
        DB::table('pengalaman_kerja')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_masuk
        ]);

        return redirect()->route('pengalaman_kerja.index')->with('success', 'Data pengalaman_kerja baru telah berhasil disimpan.');
    }
}
