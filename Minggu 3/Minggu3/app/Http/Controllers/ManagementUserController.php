<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    //di sini isi controller Management User
    public function index()
    {
        // return "Hallo ini adalah method index, dalam controller ManagementUser.";
        $nama = "David Arrozaqi";

        $pelajaran = ["Workshop Sistem Informasi Web Framework", "Workshop Mobile Applications", "Literasi Digital"];

        return view('home', compact('nama', 'pelajaran'));
    }

    public function create()
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambahkan data user";
    }

    public function store(Request $request)
    {
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }

    public function show($id)
    {
        return "method ini nantinya akan digunakan untk mengambil satu sata user dengan id=" . $id;
    }

    public function edit($id)
    {
        return "Mthod ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }

    public function update(Request $request, $id)
    {
        return "Method ini nantinya akan digunakan untuk mengubah datauser dengan id=" . $id;
    }

    public function destroy($id)
    {
        return "Method ini nantinya digunakan untuk menghapus data user dengan id=" . $id;
    }
}
