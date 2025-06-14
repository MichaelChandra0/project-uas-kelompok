<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function tampilHalaman()
    {
        return view('pages.contact');
    }

    public function tambahContact(Request $request)
    {
        $validation = $request->validate([
            'nama' => ['required'],
            'hp' => ['required'],
            'email' => ['required'],
            'alamat' => ['required'],
            'pesan' => ['required']
        ]);

        Contact::create([
            'nama' => $request->nama,
            'no_tel' => $request->hp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'pesan' => $request->pesan
        ]);

        return back()->with('berhasil','Pesan berhasil dikirim');
    }

    public function tampilContact(){
        if(!Auth::user()->role === "admin"){
            abort(403,"AKSES DITOLAK.");
        }

        $contacts = Contact::all();
        return view('adminPanel.contactUs',compact('contacts'));
    }
}
