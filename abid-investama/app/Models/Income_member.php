<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income_member extends Model
{
    protected $table = 'income_member';
    use HasFactory;
    protected $fillable = [
        'id_lokasi',
        'nama',
        'email',
        'tanggal',
        'bulan',
        'tahun',
        'emoney',
        'flazz',
        'bri',
        'bni',
        'qris',
        'income',
    ];
}
