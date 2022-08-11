<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    public function home(){
        return view('admin.dashboard');
    }
    

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request){
        // dd($request);
        $formFields = $request->validate([
            'title' => 'required|unique:categories|max:255',
            'description' => 'nullable',
        ]); 
        
        $formFields['is_active'] = $request->is_active ?? '0';
        //add user relation to the database

        return redirect()->route('dashboard.products')->with('message','Listing Creatd Successfully');
    }

    public function user(){
        return view('admin.user',[
            'users' => User::all()
        ]);
    }
}
