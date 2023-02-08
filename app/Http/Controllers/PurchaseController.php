<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function store($user_id){

        Order::where('account_id','=',$user_id)->delete();
        return redirect('/success');
    }
}
