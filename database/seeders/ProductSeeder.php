<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Luxury Watch',
            'description' => 'High-end wristwatch for happy moods.',
            'price' => 1200.00,
            'category' => 'luxury',
            'image_url' => 'https://example.com/watch.jpg'
        ]);

        Product::create([
            'name' => 'Comfort Blanket',
            'description' => 'Soft blanket for stressed moods.',
            'price' => 50.00,
            'category' => 'comfort',
            'image_url' => 'https://example.com/blanket.jpg'
        ]);
    }
}
