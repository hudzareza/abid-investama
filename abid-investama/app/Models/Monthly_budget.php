<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthly_budget extends Model
{
    protected $table = 'monthly_budget';
    use HasFactory;

    protected $fillable = [
        'id_lokasi',
        'id_permintaan',
        'nik',
        'nama',
        'bagian',
        'tanggal',
        'bulan',
        'tahun',
        'stock',
        'fpb',
        'keterangan',
    ];
}
