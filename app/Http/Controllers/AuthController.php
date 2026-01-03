<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view ('auth/login');
    }

    public function loginProcess(Request $request) {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required|min:8',
        ],[
            'email.required'    => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
            'password.min'      => 'Password Minimal 8 Karakter',
        ]);
    }
}
