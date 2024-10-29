<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income_casual extends Model
{
    protected $table = 'income_casual';
    use HasFactory;
    protected $fillable = [
        'id_lokasi',
        'nama',
        'email',
        'tanggal',
        'bulan',
        'tahun',
        'in',
        'out',
        'sakkp',
        'income',
    ];
}
