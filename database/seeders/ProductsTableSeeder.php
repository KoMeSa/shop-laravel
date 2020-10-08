<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<11; $i++){
            DB::table('products')->insert([
                'title' => 'product ' .$i,
                'price' => rand(200, 1000),
                'in_stocke' => 1,
                'description' => 'Price is zer gud. But I dont why I write it but is well done:)'
            ]);
        }
    }
}
