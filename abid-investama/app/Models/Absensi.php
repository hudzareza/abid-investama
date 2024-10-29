<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensi';
    use HasFactory;
    protected $fillable = [
        'id_lokasi',
        'nik',
        'nama',
        'bagian',
        'tanggal',
        'bulan',
        'tahun',
        'sakit',
        'tidak_info',
        'izin_lain2',
        'cuti',
        'keterangan',
    ];
}
