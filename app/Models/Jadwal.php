<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals'; // nama tabel

    protected $fillable = [
        'nama_pelatihan',
        'tanggal_mulai',
        'tanggal_selesai',
        'lokasi',
        'hasil_sertifikasi',
    ];

    protected $dates = [
        'tanggal_mulai',
        'tanggal_selesai',
    ];
}
