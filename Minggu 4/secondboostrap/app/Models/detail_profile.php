<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//  untuk berinteraksi dengan basis data, seperti operasi CRUD (Create, Read, Update, Delete) dan relasi antar tabel.
class detail_profile extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'address',
        'nomor_tlp',
        'ttl',
        'photos'
    ];
}
