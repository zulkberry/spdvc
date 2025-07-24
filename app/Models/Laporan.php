<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
        'nama_pelatihan',
        'tanggal_mulai',
        'tanggal_selesai',
        'lokasi',
    ];
}
