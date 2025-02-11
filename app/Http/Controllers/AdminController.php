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
        $bread = new Bread;
        
        $bread->name = $request->name;
        $bread->description = $request->description;
        $bread->save();

        return redirect()->back();
    }
    
}
