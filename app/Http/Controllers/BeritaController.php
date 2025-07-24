<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function create()
    {
        return view('berita.create'); // form input berita
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Simpan file gambar
        $path = $request->file('gambar')->store('berita', 'public');

        // Simpan ke database
      Berita::create([
    'judul' => $request->judul,
    'isi' => $request->konten, // ✅ harus 'isi' agar cocok dengan database
    'gambar' => $path,
]);


        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }
}
