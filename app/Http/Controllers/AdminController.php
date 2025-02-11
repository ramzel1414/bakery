<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_bread_page()
    {
        return view('add_bread_page');
    }
}
