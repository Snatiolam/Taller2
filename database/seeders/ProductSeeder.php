<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::create([
            'name' => 'Chocolate',
        ]);
        \App\Models\Product::create([
            'name' => 'Vainilla',
        ]);
        \App\Models\Product::create([
            'name' => 'Cherry',
        ]);        
    }
}
