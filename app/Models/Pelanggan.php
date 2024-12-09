<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $primaryKey = 'idPelanggan'; // Primary key custom
    protected $fillable = [
        'namaPelanggan',
        'emailPelanggan',
        'alamat',
        'noTelp',
    ];

    // Relasi ke Order
    public function orders()
    {
        return $this->hasMany(Order::class, 'idPelanggan');
    }
}
