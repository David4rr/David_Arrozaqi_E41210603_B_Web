<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    // untuk berinteraksi dengan tabel "nasabah" dalam database.
    protected $table = "nasabah";
    protected $primaryKey = "id_nasabah";
    protected $fillable = ['id_nasabah', 'nama_nasabah', 'peminjaman', 'bunga'];
}
