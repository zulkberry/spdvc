<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $liputan = Berita::where('kategori', 'liputan')->latest()->take(3)->get();
        $showcase = Berita::where('kategori', 'showcase')->latest()->take(3)->get();
        $event = Berita::where('kategori', 'event')->latest()->take(3)->get();

        return view('berita', compact('liputan', 'showcase', 'event'));
    }
}
