<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\meals;

class mealsController extends Controller
{
    public function index(){
        $meal=meals::all();
        return('/admin')->with('meal',$meal);
    }
}
