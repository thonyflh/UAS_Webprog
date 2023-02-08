<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'image',
        'item_desc',
        'price'
    ];

    public function carts(){
        return $this->hasMany(Order::class);
    }
}
