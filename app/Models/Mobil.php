<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = "mobil";

    protected $fillable = [
        'nopol',
        'merk',
        'warna',
        'kubikasi',
        'tahun_perakitan',
    ];
    public $timestamps=false;

}
