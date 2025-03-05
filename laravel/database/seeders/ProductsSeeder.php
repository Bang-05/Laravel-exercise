<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::factory()->count(40)->create();
        // DB::table('products') -> insert([
        // [
        //     "name" => "Chicken",
        //     "price" => 200,
        //     "image" => " ",
        //     "cate_id" => 1,
        //     "created_at" => now(),
        //     "updated_at" => now(),
        // ],

        // [
        //     "name" => "Mango",
        //     "price" => 20,
        //     "image" => " ",
        //     "cate_id" => 1,   
        //     "created_at" => now(),
        //     "updated_at" => now(),
        // ],
        // ]);
    }
}
