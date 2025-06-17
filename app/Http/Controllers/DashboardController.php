<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $menu_kami = $menus->take(5);
        $sedang_promo_random = $menus->random(4);
        $terbaru = Menu::orderBy('created_at', 'desc')->take(4)->get();
        return view('pages.dashboard',compact('menu_kami','sedang_promo_random','terbaru'));
    }
}
