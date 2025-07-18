<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProgresController extends Controller
{
    public function index()
    {
        return view('admin.progres');
    }
}
