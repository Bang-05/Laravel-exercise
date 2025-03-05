<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::factory()->count(20)->create();
        // DB::table('categories')->insert([
        //     "name" => "Food",
        //     "discription" => "Delicious",
        //     "created_at" => now(),
        //     "updated_at" => now(),
        // ]);
    }
}
