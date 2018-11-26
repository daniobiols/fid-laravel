<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Product::class,30)->create();
    }
}
