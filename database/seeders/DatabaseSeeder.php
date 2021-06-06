<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Product::factory(5)->create();
        //factory(Product::class,5)->create();
    }
}
