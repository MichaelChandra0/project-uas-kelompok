<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::latest()->paginate(10);
        return view('pages.shop', compact('menus'));
    }

    public function adminView()
    {
        $menus = Menu::latest()->paginate(10);
        return view('adminPanel.adminDashboard', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }

        return view('catalog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }

        $validated = $request->validate([
            'namaMakanan' => 'required|string|max:255',
            'kategoriToko' => 'required|string',
            'gambarMakanan' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'hargaMakanan' => 'required|numeric',
        ]);

        if ($request->hasFile('gambarMakanan')) {
            $path = $request->file('gambarMakanan')->store('images','public');
            $validated['gambar'] = $path;
        }

        Menu::create([
            'nama' => $validated['namaMakanan'],
            'gambar' => $validated['gambar'],
            'kategori' => $validated['kategoriToko'],
            'harga' => $validated['hargaMakanan'],
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */   
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        if(Auth::user()->role !== "admin"){
            abort(403);
        }

        $menus = Menu::findOrFail($id);
        return view('adminPanel.update', compact('menus'));
    }




    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(Auth::user()-> role !== "admin"){
            abort(403);
        }

        $menu = Menu::findorFail($id);

        $validated = $request->validate([
            'gambarMakanan' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'namaMakanan' => 'nullable|string',
            'hargaMakanan' => 'nullable|numeric',
        ]);

        if ($request->hasFile('gambarMakanan')) {
            $path = $request->file('gambarMakanan')->store('images','public');
            $validated['gambar'] = $path;
        }

        $menu->update([
            'nama' => $validated['namaMakanan'] ?? $menu->nama,
            'gambar' => $validated['gambar'] ?? $menu->gambar,
            'harga' => $validated['hargaMakanan'] ?? $menu->harga,
        ]);

        return redirect('adminPanel');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::findorFail($id);
        $menu->delete();

        return redirect('adminPanel');
    }
}
