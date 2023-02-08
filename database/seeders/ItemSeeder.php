<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->insert([
            'item_name' => 'vegetable 1',
            'image' => 'broccoli.png',
            'item_desc' => 'Vegetables are part of plats that are consumed by humans or other animals as food. this limited
            vegetable is the only one in the world because of its size & color.',
            'price'=>10000
        ]);
        DB::table('items')->insert([
            'item_name' => 'vegetable 2',
            'image' => 'broccoli.png',
            'item_desc' => 'Vegetables are part of plats that are consumed by humans or other animals as food. this limited
            vegetable is the only one in the world because of its size & color.',
            'price'=>5000
        ]);
        DB::table('items')->insert([
            'item_name' => 'vegetable 3',
            'image' => 'broccoli.png',
            'item_desc' => 'Vegetables are part of plats that are consumed by humans or other animals as food. this limited
            vegetable is the only one in the world because of its size & color.',
            'price'=>7000
        ]);
        DB::table('items')->insert([
            'item_name' => 'vegetable 4',
            'image' => 'broccoli.png',
            'item_desc' => 'Vegetables are part of plats that are consumed by humans or other animals as food. this limited
            vegetable is the only one in the world because of its size & color.',
            'price'=>20000
        ]);
        DB::table('items')->insert([
            'item_name' => 'vegetable 5',
            'image' => 'broccoli.png',
            'item_desc' => 'Vegetables are part of plats that are consumed by humans or other animals as food. this limited
            vegetable is the only one in the world because of its size & color.',
            'price'=>11000
        ]);
        DB::table('items')->insert([
            'item_name' => 'vegetable 6',
            'image' => 'broccoli.png',
            'item_desc' => 'Vegetables are part of plats that are consumed by humans or other animals as food. this limited
            vegetable is the only one in the world because of its size & color.',
            'price'=>15200
        ]);
        DB::table('items')->insert([
            'item_name' => 'vegetable 7',
            'image' => 'broccoli.png',
            'item_desc' => 'Vegetables are part of plats that are consumed by humans or other animals as food. this limited
            vegetable is the only one in the world because of its size & color.',
            'price'=>2000
        ]);
        DB::table('items')->insert([
            'item_name' => 'vegetable 8',
            'image' => 'broccoli.png',
            'item_desc' => 'Vegetables are part of plats that are consumed by humans or other animals as food. this limited
            vegetable is the only one in the world because of its size & color.',
            'price'=>4500
        ]);
        DB::table('items')->insert([
            'item_name' => 'vegetable 9',
            'image' => 'broccoli.png',
            'item_desc' => 'Vegetables are part of plats that are consumed by humans or other animals as food. this limited
            vegetable is the only one in the world because of its size & color.',
            'price'=>8500
        ]);
        DB::table('items')->insert([
            'item_name' => 'vegetable 10',
            'image' => 'broccoli.png',
            'item_desc' => 'Vegetables are part of plats that are consumed by humans or other animals as food. this limited
            vegetable is the only one in the world because of its size & color.',
            'price'=>17000
        ]);
        DB::table('items')->insert([
            'item_name' => 'vegetable 11',
            'image' => 'broccoli.png',
            'item_desc' => 'Vegetables are part of plats that are consumed by humans or other animals as food. this limited
            vegetable is the only one in the world because of its size & color.',
            'price'=>13000
        ]);
        DB::table('items')->insert([
            'item_name' => 'vegetable 12',
            'image' => 'broccoli.png',
            'item_desc' => 'Vegetables are part of plats that are consumed by humans or other animals as food. this limited
            vegetable is the only one in the world because of its size & color.',
            'price'=>6000
        ]);

    }
}
