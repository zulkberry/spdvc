<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function index()
    {
        return view('admins.data');
    }
}
