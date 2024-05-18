<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;

    protected $fillable =[
        'nama',
        'alamat',
        'tanggal',
        'plat_nomer',
        'jenis_mobil',
        'harga',

    ];
}
