<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BillDetails;
use App\Models\Bills;
use App\Models\Products;

class BillDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bills = Bills::pluck('id')->toArray(); 
        $products = Products::pluck('id')->toArray(); 

        if (empty($bills) || empty($products)) {
            return; 
        }

        BillDetails::factory(20)->create([
            'id_bill' => fake()->randomElement($bills), 
            'id_product' => fake()->randomElement($products), 
        ]);
    }
}
