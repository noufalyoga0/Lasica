<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'nama_trip',
        'lokasi',
        'tanggal',
        'durasi_hari',
        'harga',
        'image',
        'rating',
        'total_ulasan',
        'total_dipesan',
        'views',
        'min_pax',
        'image',
        'total_dipesan',
        'views',
        'deskripsi',
    ];
}

