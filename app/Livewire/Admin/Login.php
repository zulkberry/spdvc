<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function login()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        Session::flash('error', 'Email atau password salah.');
    }

    public function render()
    {
        return view('livewire.admin.login-page')->layout('layouts.guest');
    }
}
