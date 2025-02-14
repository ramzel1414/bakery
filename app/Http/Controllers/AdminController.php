<?php

namespace App\Http\Controllers;

use App\Models\Bread;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function add_bread_page()
    {
        return view('add_bread_page');
    }

    public function create_bread(Request $request)
    {
        //Bread is a model that we just using php artisan make:model Bread -m
        $bread = new Bread;
        
        $bread->name = $request->name;
        $bread->description = $request->description;

        //putting image to the public folder
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        //move the image to the public folder
        $request->image->move('postimage', $imagename);
        //store imagename to image column
        $bread->image = $imagename;

        $bread->save();

        return redirect()->back()->with('message', 'Bread added successfully');
    }

    public function show_bread() {
        
        $bread = Bread::all();

        return view('show_bread_page', compact('bread'));
    }
    
}
