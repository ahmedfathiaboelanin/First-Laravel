<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\Products::factory(10)->create([
            'title' => 'product 1',
            'description' => 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ',
            'price' => 300 ,
            'rate' => 4.5,
            'user_id'=>'4',
            'image'=>'/images/product-12.jpg'
        ]);

        \App\Models\Comments::factory(10)->create([
            'user_id' => '1',
            'comment' =>'lorem lorem lorem',
            'product_id' => '4' ,
        ]);
    }
}
