<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = "motor";

    protected $fillable = [
        'nopol',
        'merk',
        'warna',
        'kubikasi',
        'tahun_perakitan',
    ];
    public $timestamps=false;
}
