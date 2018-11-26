<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {

    return [
      'name' => $faker->sentence(1),
      'trademark'=> $faker->company,
      'category_id'=>rand(1,3),
      'type_id'=>rand(1,3),
      'subcategory_id'=>rand(1,22),
      'description'=> $faker->text(50),
      'price'=>rand(1000,4000),
      'price_list'=>rand(1000,4000),
      'product_code'=>$faker->ean8,
      'size'=> rand(1,46),
      'quantity'=>rand(1,20),
      'color'=> $faker->colorName
    ];
});
