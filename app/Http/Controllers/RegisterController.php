<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('register');
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'email'=>'required|email|unique:accounts,email',
            'role_id'=>'required',
            'gender_id'=>'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

        DB::table('users')->insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'role_id'=>$request->role_id,
            'gender_id'=>$request->gender_id,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Please login to continue.');
    }
}
