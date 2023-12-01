<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index(){
        return view('dashboard');
    }

    function admin(){
        return view('dashboard');
    }

    function staf_aset(){
        return view('dashboard');
    }
}
