<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Product 1', 'description' => 'Description for product 1', 'price' => 10.00],
            ['name' => 'Product 2', 'description' => 'Description for product 2', 'price' => 20.00],
            ['name' => 'Product 3', 'description' => 'Description for product 3', 'price' => 30.00],
            ['name' => 'Product 4', 'description' => 'Description for product 4', 'price' => 40.00],
            ['name' => 'Product 5', 'description' => 'Description for product 5', 'price' => 50.00],
            ['name' => 'Product 6', 'description' => 'Description for product 6', 'price' => 60.00],
            ['name' => 'Product 7', 'description' => 'Description for product 7', 'price' => 70.00],
            ['name' => 'Product 8', 'description' => 'Description for product 8', 'price' => 80.00],
            ['name' => 'Product 9', 'description' => 'Description for product 9', 'price' => 90.00],
            ['name' => 'Product 10', 'description' => 'Description for product 10', 'price' => 100.00],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

