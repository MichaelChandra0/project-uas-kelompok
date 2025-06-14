<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $random = $menus->random(4);
        $terbaru = Menu::whereIn('id',[1,2,3,4])->get();
        return view('pages.dashboard',compact('menus','random','terbaru'));
    }
}
