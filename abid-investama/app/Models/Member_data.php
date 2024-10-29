<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member_data extends Model
{
    protected $table = 'member_data';
    use HasFactory;

    protected $fillable = [
        'id_lokasi',
        'nama',
        'jenis_kendaraan',
        'no_pol',
        'no_kwt',
        'mulai',
        'akhir',
        'harga',
        'keterangan',
    ];
}
