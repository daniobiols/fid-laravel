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
      $faker=Faker::create();
      for ($i=0; $i <30; $i++) {
        \DB::table('products')->insert((
         'name' => $faker->name,
         'trademark'=> $faker->company,
         'category_id'=>rand(1,3),
         'type_id'=>rand(1,3),
         'subcategory_id'=>rand(1,22),
         'description'=> $faker->text(50),
         'price',
         'price_list',
         'product_code',
         'size',
         'quantity',
         'color'
       ));
      }

    }
}
