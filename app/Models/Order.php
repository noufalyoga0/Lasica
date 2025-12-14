<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'trip_id',
        'nama',
        'email',
        'no_telp',
        'tanggal',
        'paket',
        'total_harga',
        'status'
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {   
    return $this->hasOne(Payment::class);
    
    return $this->belongsTo(Trip::class);
    }
}
