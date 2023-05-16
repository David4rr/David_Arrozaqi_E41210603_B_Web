<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    // mengambil data dari tabel "Nasabah"
    public function index()
    {
        $nasabah = Nasabah::get();
        return view('view_page', compact('nasabah'));
    }

    // menampilkan halaman "add_page" yang digunakan untuk membuat entri baru 
    public function create()
    {
        return view('add_page');
    }

    // untuk menyimpan data yang dikirimkan melalui permintaan HTTP POST ke tabel "Nasabah" dalam database. 
    public function store(Request $request)
    {
        Nasabah::create($request->all());

        return redirect()->route('nasabah.index');
    }

    // untuk menampilkan halaman "add_page" yang digunakan untuk mengedit data nasabah yang telah ada.
    public function edit(Nasabah $nasabah)
    {
        return view('add_page', compact('nasabah'));
    }

    // untuk memperbarui data nasabah yang ada dalam tabel "Nasabah" berdasarkan permintaan yang dikirimkan melalui HTTP POST
    public function update(Request $request, Nasabah $nasabah)
    {
        $nasabah->update($request->all());

        return redirect()->route('nasabah.index');
    }

    // untuk menghapus data nasabah yang ada dalam tabel "Nasabah"
    public function destroy(Nasabah $nasabah)
    {
        $nasabah->delete();
        return redirect()->route('nasabah.index');
    }
}
