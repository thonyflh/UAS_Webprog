<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function idx(){
        $user_data = User::all();
        return view('manage',compact('user_data'));
    }

    public function update($id){
        $user_data = User::where('id','=',$id)->first();
        //dd($data);
        return view('update', compact('user_data'));
    }

    public function updateLogic(Request $request, $id){
        // $user_data = User::find($id);

        $request->validate([
            'role_id'=>'required'
        ]);

        try {
            DB::table('users')->where('id',$id)->update([
                'role_id' => $request->role_id
            ]);

            return redirect('/manage')->with('success', 'Changes saved!');
        } catch (\Throwable $th) {
            return redirect('/manage')->with('failedPass', 'Error occured!');
        }

        // $user_data->update($request->all());

        // return redirect('/manage');
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();

        return redirect('/manage');
    }
}
