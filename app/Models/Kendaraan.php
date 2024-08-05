<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_pol',
        'no_mesin',
        'merek',
        'warna',
    ];

    protected $table = 'kendaraan';
}
