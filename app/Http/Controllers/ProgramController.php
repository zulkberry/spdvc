<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return view('program'); // Jika file-nya di views/program.blade.php
    }

    public function teachingFactory()
    {
        return view('program.teaching-factory');
    }

    public function magangBersertifikat()
    {
        return view('program.magang-bersertifikat');
    }

    public function careerDevelopment()
    {
        return view('program.career-development');
    }

    public function training()
    {
        return view('program.training');
    }
    

}
