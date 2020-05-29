<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\meals;

class AdminController extends Controller
{
    public function index()
    {
        $meals=meals::all();
        return view('admin')->with('data',['meals'=>$meals]);
    }

    public function store(Request $request)
    {
        $meals=meals::all();
        $admin=new Admin();
        $admin->Food_Name=$request->input('Food_Name');
        $admin->Food_Price=$request->input('Food_Price');
        $admin->food_description=$request->input('food_description');
        $admin->meal_type=$request->input('meal_type');
       
        if($request->hasfile('Food_Image'))
        {
            $file=$request->file('Food_Image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/foods/',$filename);
            $admin->Food_Image=$filename;
        }

        else
        {
            return $request;
            $admin->Food_Image='';
        }

        $admin->save();
        return view('admin')->with('data',['admin'=>$admin,'meals'=>$meals]);
    }


    public function display()
    {
        $meal=meals::all();
        $admins= Admin::all();
        return view('AdminView')->with('data',['meal'=>$meal,'admins'=>$admins]);
    }

    public function edit($id)
    {   $meal=meals::all();
        $admins=Admin::find($id);
        return view('AdminUpdate')->with('data',['meals'=>$meal,'admins'=>$admins]);
    }

    public function update(Request $request, $id)
    {
        $meals=meals::all();
        $admins=Admin::find($id);
        $admins->Food_Name=$request->input('Food_Name');
        $admins->Food_Price=$request->input('Food_Price');
        $admins->food_description=$request->input('food_description');
        $admins->meal_type=$request->input('meal_type');

        
        if($request->hasfile('Food_Image'))
        {
            $file=$request->file('Food_Image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/foods/',$filename);
            $admins->Food_Image=$filename;
        }

        $admins->save();
        return redirect('/adminpage')->with('data',['admins'=>$admins,'meals'=>$meals]);
    }
}
