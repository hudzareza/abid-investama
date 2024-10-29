<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_item extends Model
{
    protected $table = 'request_item';
    use HasFactory;
    protected $fillable = ['nama_permintaan', 'keterangan'];
}
