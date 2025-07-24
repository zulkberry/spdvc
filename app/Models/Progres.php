<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    use HasFactory;

    // Nama tabel (opsional, jika nama model tidak sesuai default plural Laravel)
    protected $table = 'progres';

    // Kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'judul',
        'deskripsi',
        'progress_ke',
    ];
}
