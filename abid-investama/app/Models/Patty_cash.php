<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patty_cash extends Model
{
    protected $table = 'patty_cash';
    use HasFactory;
    protected $fillable = [
        'id_lokasi',
        'supervisor',
        'administrasi',
        'nik',
        'nama',
        'bagian',
        'tanggal',
        'bulan',
        'tahun',
        'keterangan_pemakaian',
        'debet',
        'kredit',
        'saldo',
    ];
}
