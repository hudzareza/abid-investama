<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'lokasi';
    use HasFactory;
    protected $fillable = ['nama', 'alamat', 'no_telphone'];
}