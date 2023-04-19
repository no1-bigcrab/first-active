<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => Str::random(50),
            'short_description' => Str::random(150),
            'description' => Str::random(100),
            'size' => '1',
            'colors' => '1',
            'quality' => random_int(2,300),
            'price' => random_int(2,300),
            'sale_price' => random_int(2,300),
            'category_id' => random_int(1,9),
            'user_id' => '1',
        ]);
    }
}
