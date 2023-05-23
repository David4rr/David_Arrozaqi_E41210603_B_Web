<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// definisi kelas PengalamanKerja yang merupakan model dalam suatu framework web.
class PengalamanKerja extends Model
{
    protected $table = 'pengalaman_kerja';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','jabatan','tahun_masuk','tahun_keluar'];
}
