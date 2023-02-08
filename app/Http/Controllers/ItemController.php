<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function idx(){
        $item_data = item::paginate(10);
        return view('home',compact('item_data'));
    }

    public function detail($id){
        $data = Item::where('id','=',$id)->first();
        return view('detail',compact('data'));
    }
}
