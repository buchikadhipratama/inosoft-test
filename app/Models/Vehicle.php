<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Vehicle extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'vehicles';

    protected $fillable = [
        'vehicle_id',
        'mobil_id',
        'mesin',
        'kapasitas',
        'tipe',
        'kendaraan',
        'motor_id',
        'suspensi',
        'transmisi',
        'status',
    ];
}
