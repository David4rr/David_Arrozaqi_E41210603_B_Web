<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
