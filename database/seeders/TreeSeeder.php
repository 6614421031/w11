<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trees')->insert([
            'tree_code' => 'TREE001',
            'name' => 'Mango',
            'scientific_name' => 'Mangifera indica',
            'type' => 'Fruit',
            'height' => 150,
            'age' => 3,
            'price' => 2500.00,
            'status' => 'Available',
            'plant_date' => '2024-01-15',
            'location' => 'Zone A',
            'soil_type' => 'Loamy',
            'is_fruit_tree' => true,
            'description' => 'Healthy mango tree ready for planting.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
