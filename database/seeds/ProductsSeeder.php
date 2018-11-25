<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('products')->insert([
       ['name' => 'Indumentaria'],
       ['name' => 'Calzado'],
       ['name' => 'Accesorios']
     ]);
    }
}
