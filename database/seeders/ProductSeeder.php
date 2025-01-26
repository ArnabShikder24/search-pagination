<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Product::create(['name' => 'Laptop', 'price' => 1200.99]);
    Product::create(['name' => 'Smartphone', 'price' => 699.49]);
    Product::create(['name' => 'Tablet', 'price' => 329.99]);
}
}
