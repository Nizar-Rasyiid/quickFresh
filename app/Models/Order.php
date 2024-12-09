<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'idOrder';
    protected $fillable = [
        'idDriver',
        'idPelanggan',
        'idToko',
        'idProduk',
        'date',
        'totalOrder',
        'status',
    ];

    // Relasi ke Driver
    public function driver()
    {
        return $this->belongsTo(Driver::class, 'idDriver');
    }

    // Relasi ke Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'idPelanggan');
    }

    // Relasi ke Toko
    public function toko()
    {
        return $this->belongsTo(Toko::class, 'idToko');
    }

    // Relasi ke Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'idProduk');
    }
    
}
