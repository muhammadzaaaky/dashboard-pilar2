<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vendors';
    protected $fillable = [
        'validator',
        'nama_validator',
        'wa_validator',
        'nama_vendor',
        'nama_driver',
        'wa_driver',
        'telepon',
        'alamat',
        'ktp',
        'sim',
        'kir',
        'stnk',
        'armada1',
        'armada2',
        'armada3',
        'covarage',
        'homebase',
        'nopol',
        'minat',
        'kota',
    ];

    public function setMinatAttribute($value)
    {
        $this->attributes['minat'] = json_encode($value);
    }

    public function getMinatAttribute($value)
    {
        return $this->attributes['minat'] = json_decode($value);
    }
    public function provinceId()
    {
        return $this->belongsTo(Province::class, 'kota');
    }
}
