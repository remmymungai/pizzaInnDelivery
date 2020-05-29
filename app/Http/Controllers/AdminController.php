<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function store(Request $request)
    {
        $admin=new Admin();
        $admin->Food_Name=$request->input('Food_Name');
        $admin->Food_Price=$request->input('Food_Price');
       
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
        return redirect('/adminpage')->with('admin',$admin);
    }


    public function display()
    {
        $admins= Admin::all();
        return view('AdminView')->with('admins',$admins);
    }

    public function edit($id)
    {
        $admins=Admin::find($id);
        return view('AdminUpdate')->with('admins',$admins);
    }

    public function update(Request $request, $id)
    {
        $admins=Admin::find($id);
        $admins->Food_Name=$request->input('Food_Name');
        $admins->Food_Price=$request->input('Food_Price');


        
        if($request->hasfile('Food_Image'))
        {
            $file=$request->file('Food_Image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/foods/',$filename);
            $admins->Food_Image=$filename;
        }

        $admins->save();
        return redirect('/adminpage')->with('admins',$admins);
    }

    function delete($id)
    {
        DB::table('menus')->where('id',$id)->delete();
        return redirect('/adminpage');
    }
}
