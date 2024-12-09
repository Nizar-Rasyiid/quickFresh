<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $primaryKey = 'idDriver'; // Primary key custom
    protected $fillable = [
        'namaDriver',
        'emailDriver',
        'username',
        'password',
        'balance',
    ];

    // Relasi ke Order
    public function orders()
    {
        return $this->hasMany(Order::class, 'idDriver');
    }
    
}
