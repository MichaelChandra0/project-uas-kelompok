<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $beberapa = $menus->take(5);
        $random = $menus->random(4);
        $terbaru = Menu::orderBy('created_at', 'desc')->take(4)->get();
        return view('pages.dashboard',compact('beberapa','random','terbaru'));
    }
}
