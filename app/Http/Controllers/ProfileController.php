<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function idx (){
        $profile_data = User::all();
        return view('profile');
    }

    public function update (Request $request){
        $request->validate([
            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'email'=>'required|email|unique:accounts,email',
            'role_id'=>'required',
            'gender_id'=>'required',
            'password' => 'required|min:8',
        ]);

        try {
            DB::table('users')->where('id', Auth::user()->id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'role_id'=>$request->role_id,
            'gender_id'=>$request->gender_id,
            'password' => Hash::make($request->password),
            ]);

            return redirect('/home')->with('success', 'Changes saved!');
        } catch (\Throwable $th) {
            return redirect('/profile')->with('failed', 'Error occured!');
        }

        // User::where('id', $request->id)->update($validation);

        // return redirect('/home')->with('success', 'update successfully');
    }
}
