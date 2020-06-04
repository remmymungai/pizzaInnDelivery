<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class menuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return view('menu')->with('menu',$menu);
    }
}
