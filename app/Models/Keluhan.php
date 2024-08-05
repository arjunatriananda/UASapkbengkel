<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_keluhan',
        'ongkos',
        'no_pol',
        'id_customer',
        'id_pegawai',
    ];

    protected $table = 'keluhan';

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'no_pol', 'no_pol');
    }

    public function customer()
    {
        return $this->belongsTo(customers::class, 'id_customer');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
