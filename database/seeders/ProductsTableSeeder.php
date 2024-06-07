<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['name' => 'Dell Monitor', 'description' => '24-inch Full HD Monitor', 'price' => 199.99, 'category' => 'Monitors', 'image' => 'dell_monitor.jpg'],
            ['name' => 'Gaming PC', 'description' => 'High performance gaming PC', 'price' => 1499.99, 'category' => 'PC', 'image' => 'gaming_pc.jpg'],
            ['name' => 'NVIDIA GTX 3080', 'description' => 'High-end graphics card', 'price' => 699.99, 'category' => 'GPU', 'image' => 'nvidia_gtx_3080.jpg'],
            ['name' => 'Intel i9 Processor', 'description' => 'Latest generation CPU', 'price' => 499.99, 'category' => 'CPU', 'image' => 'intel_i9.jpg'],
            ['name' => 'Cyberpunk 2077', 'description' => 'Popular RPG game', 'price' => 59.99, 'category' => 'Games', 'image' => 'cyberpunk_2077.jpg'],
            // Add more products as needed
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

