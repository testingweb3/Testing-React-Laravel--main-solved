<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::create([
            'img' => '/assets/pic1.jpg',
            'brand' => 'Nike',
            'title' => 'Nike Air Max 270',
            'rating' => 4.5,
            'reviews' => 120,
            'sellPrice' => 8999,
            'orders' => '150',
            'mrp' => '12999',
            'discount' => 30,
            'category' => 'men',
        ]);

        Product::create([
            'img' => '/assets/pic2.jpg',
            'brand' => 'Adidas',
            'title' => 'Adidas Ultraboost 22',
            'rating' => 4.8,
            'reviews' => 240,
            'sellPrice' => 11999,
            'orders' => '310',
            'mrp' => '17999',
            'discount' => 33,
            'category' => 'men',
        ]);

        Product::create([
            'img' => '/assets/pic3.jpg',
            'brand' => 'Puma',
            'title' => 'Puma Classic Suede',
            'rating' => 4.2,
            'reviews' => 85,
            'sellPrice' => 3999,
            'orders' => '95',
            'mrp' => '5999',
            'discount' => 33,
            'category' => 'women',
        ]);

        Product::create([
            'img' => '/assets/pic4.jpg',
            'brand' => 'Skechers',
            'title' => 'Skechers Go Walk Max',
            'rating' => 4.0,
            'reviews' => 60,
            'sellPrice' => 4500,
            'orders' => '80',
            'mrp' => '6000',
            'discount' => 25,
            'category' => 'women',
        ]);

        Product::create([
            'img' => '/assets/pic5.jpg',
            'brand' => 'Under Armour',
            'title' => 'UA Charged Assert 9',
            'rating' => 4.3,
            'reviews' => 45,
            'sellPrice' => 2999,
            'orders' => '70',
            'mrp' => '3999',
            'discount' => 25,
            'category' => 'kids',
        ]);
    }
}
