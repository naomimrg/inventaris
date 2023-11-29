<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => "Username harus diisi",
            'password.required' => "Password harus diisi",
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect('dashboard');
            } elseif (Auth::user()->role == 'staf_aset') {
                return redirect('dashboard');
            }
        } else {
            return redirect()->route('login')->withErrors(['error' => 'Username atau password yang dimasukkan salah'])->withInput();
        }        
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
};
