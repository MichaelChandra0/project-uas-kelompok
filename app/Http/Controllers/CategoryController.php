<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;  

class CategoryController extends Controller
{
    public function getCategory(){
        $categories = Menu::all();
        return response()->json($categories);
    }
}
