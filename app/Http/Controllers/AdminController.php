<?php

namespace App\Http\Controllers;

use App\Models\Bread;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

//this is working but I just use the full facade path (seems vscode don't recognize this)
// use Alert;
use RealRashid\SweetAlert\Facades\Alert;     


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

        $user = Auth::user(); //#1 getting the currently logged in user
        // $user = User::findOrFail($request->baker_id);  //2 if user admin can change other baker

        // Assign baker_id from authenticated user
        $bread->baker_id = $user->id;

        $bread->save();

        Alert::success('Success', 'You just added a new bread!');

        return redirect()->route('show-bread');
    }

    public function show_bread() {
        
        // Fetch all breads with the baker's details (user relationship)
        $bread = Bread::with('baker')->get();

        return view('show_bread_page', compact('bread'));
    }

    public function delete_bread($id) {
        
        $bread = Bread::find($id);

        $bread->delete();

        Alert::success('Deleted', 'You just deleted the bread!');

        return redirect()->back();
    }

    public function edit_bread($id) {
        
        //bread represents the table and the ->here , here represents column or label
        $bread = Bread::find($id);


        return view('edit_bread_page', compact('bread'));
    }

    public function update_bread(Request $request, $id) {

        $bread = Bread::find($id);

        $bread->name = $request->name;
        $bread->description = $request->description;
        
        $image = $request->image;
        if($image) {
            //putting image to the public folder
            $imagename = time().'.'.$image->getClientOriginalExtension();
            //move the image to the public folder
            $request->image->move('postimage', $imagename);
            //store imagename to image column
            $bread->image = $imagename;
        }
        
        $bread->save();

        Alert::success('Updated', 'The Bread has been updated successfully');

        return redirect()->route('show-bread');
    }
}
