<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecyleCenter extends Model
{
    protected $fillable =[
        'name',
        'gambar',
        'lokasi',
        'kontak_info',
        'deskripsi',
    ];
}
