<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //tampil form register
    public function tampilFormRegister()
    {
        if(Auth::check()){
            return back();
        }
        return view('registerUser');
    }

    public function register(Request $request)
    {
        //validasi data
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'konfirmasi' => 'required',
        ]);

        $konfirmasi = $request->konfirmasi;
        $password = $request->password;

        if($konfirmasi === $password){
            User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/')->with('');
        }else{
            return redirect('/register')->with('gagal', 'Password tidak sesuai');
        }
    }



    public function tampilLogin()
    {
        if (Auth::check()){
            return back();
        }

        return view('loginUser');
    }




    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'gagal' => 'Usename atau Password Salah.',
        ])->onlyInput('username');

    }

    public function logout(Request $request): RedirectResponse
    {

        if(!Auth::check()){
            return redirect('/');
        };
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return back();
    }
}
