<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgresFrontendController extends Controller
{
    public function index()
    {
        return view('frontend.progres'); // sesuai dengan view yang kamu buat
    }
}
