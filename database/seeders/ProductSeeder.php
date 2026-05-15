<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Product::create([
        'brand'=>'Nike',
        'title'=>'Air Max 270',
        'rating'=>4.5,
        'sellPrice'=>12000,
        'reviews'=>120,
        'orders'=>500,
        'mrp'=>15000,
        'discount'=>20,
        'category'=>'men',
        'img'=>'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/1c9e5b8c-7a3d-4f2e-9b8c-5e6a1b2c3d4e/air-max-270-shoe-KkLcGR.png',

        ]);
        //second product
        Product::create([
            'brand'=>'Adidas',
            'title'=>'Ultraboost 21',
            'rating'=>4.7,
            'sellPrice'=>15000,
            'reviews'=>150,
            'orders'=>600,
            'mrp'=>18000,
            'discount'=>17,
            'category'=>'men',
            'img'=>'https://assets.adidas.com/images/w_600,f_auto,q_auto/1b9c8e5c-9a3d-4f2e-9b8c-5e6a1b2c3d4e/ultraboost-21-shoe-KkLcGR.png',
        ]);
    }
}
