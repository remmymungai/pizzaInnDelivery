<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\toppings;

class menuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        $toppings= toppings::all();
        return view('menu')->with('data',['menu'=>$menu,'toppings'=>$toppings]);
    }
}
