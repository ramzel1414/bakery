<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bread;


class HomeController extends Controller
{
    public function welcome() {
        $bread = Bread::all();

        return view('welcome', compact('bread'));
    }
}
