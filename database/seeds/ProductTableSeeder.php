<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Product::create([
                'name' => 'Laptop-1',
                'slug' => 'laptop-1',
                'details' =>' TB SSD, 32GB RAM',
                'price' => 54665,
                'description' =>' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                
        ]);
        Product::create([
            'name' => 'Laptop-2',
            'slug' => 'laptop-2',
            'details' => ' TB SSD, 32GB RAM',
            'price' => 54665,
            'description' => ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            
        ]);
        Product::create([
            'name' => 'Laptop-3',
            'slug' => 'laptop-3',
            'details' => ' TB SSD, 32GB RAM',
            'price' => 54665,
            'description' => ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           
        ]);
    }
}
