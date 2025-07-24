<?php

namespace App\Http\Controllers\Admins; // ✅ HANYA SATU namespace

use App\Models\Progres;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // ✅ Tambahkan ini


class ProgresController extends Controller
{
    public function index()
    {
        $progress = Progres::orderBy('progress_ke')->get();
        return view('frontend.progres', compact('progress'));
    }
}
