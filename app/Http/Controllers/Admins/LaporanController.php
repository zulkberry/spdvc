<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller; // ini HARUS ada!

class DashboardController extends Controller
{
    public function index()
    {
        return view('admins.laporan');
    }
}
