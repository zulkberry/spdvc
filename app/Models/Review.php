<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Berita;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'quote',
        'rating',
        'avatar',
    ];

    public function berita()
    {
        return $this->belongsTo(Berita::class);
    }
}


