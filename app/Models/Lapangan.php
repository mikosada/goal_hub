<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasFactory;

class Lapangan extends Model
{
    protected $fillable = [
        'nama',
        'image',
        'deskripsi',
        'harga',
        'lokasi'
    ];
}
