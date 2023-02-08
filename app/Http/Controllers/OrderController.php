<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function idx($id){
        $order_data = Order::where('account_id','=',$id)->get();

        return view('order', compact('order_data'));
    }

    public function store($user_id,$item_id, Request $request){

        Order::insert([
            'account_id' => $user_id,
            'item_id' => $item_id,
        ]);
        $order_data = Order::where('account_id','=',$user_id)->get();

        return redirect()->to('/order/'.$user_id)->with(compact('order_data'));
    }

    public function deleteLogic($user_id,$id){
        DB::table('orders')->where('item_id','=',$id)->delete();
        $order_data = Order::where('account_id','=',$user_id)->get();

        return view('order',compact('order_data'));
    }
}
