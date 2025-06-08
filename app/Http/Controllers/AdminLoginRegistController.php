<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminLoginRegistController extends Controller
{
    //tampil form login
    public function tampilFormLogin()
    {
        if(Auth::user()){

            if(Auth::user()->role === "admin"){
                return back();
            }
        }
        return view('loginAdmin');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials) && Auth::user()->role === "admin") {
            $request->session()->regenerate();

            return redirect()->intended('/adminPanel');
        }

        return back()->withErrors([
            'gagal' => 'Usename atau Password Salah.',
        ])->onlyInput('username');
    }
}
