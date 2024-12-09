<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $primaryKey = 'idToko'; // Primary key custom
    protected $fillable = [
        'namaToko',
        'alamatToko',
    ];

    // Relasi ke Order
    public function orders()
    {
        return $this->hasMany(Order::class, 'idToko');
    }
}
