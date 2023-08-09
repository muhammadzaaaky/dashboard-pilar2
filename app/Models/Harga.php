<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    use HasFactory;

    protected $table = "Harga";
    protected $fillable = [
        'origin_provinsi',
        'origin_kabupaten',
        'origin_kecamatan',
        'destinasi_provinsi',
        'destinasi_kabupaten',
        'destinasi_kecamatan',
        'armada',
        'harga'
    ];
    public $timestamps = true;
}
