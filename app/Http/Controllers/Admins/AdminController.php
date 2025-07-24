<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller; // ✅ ini WAJIB!
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.index');
    }
}
