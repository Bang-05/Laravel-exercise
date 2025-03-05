<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bills;
use App\Models\Customer;

class BillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = Customer::pluck('id')->toArray();
        Bills::factory(20)->create([
            'id_customer' => fake()->randomElement($customers), 
        ]);
    }
}
