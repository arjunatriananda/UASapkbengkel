<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_supplier',
        'alamat',
        'no_hp',
        'id_barang',
    ];

    protected $table = 'supplier';

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
