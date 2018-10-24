<?php

use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('subcategories')->insert([
        ['name' => 'Pantalones','category_id'=>1],
        ['name' => 'Medias','category_id'=>1],
        ['name' => 'Camisas','category_id'=>1],
        ['name' => 'Conjuntos','category_id'=>1],
        ['name' => 'Chombas','category_id'=>1],
        ['name' => 'Remeras','category_id'=>1],
        ['name' => 'Bermudas','category_id'=>1],
        ['name' => 'Buzos','category_id'=>1],
        ['name' => 'Sandalias','category_id'=>2],
        ['name' => 'Mocasines','category_id'=>2],
        ['name' => 'Zapatillas','category_id'=>2],
        ['name' => 'Borcegos','category_id'=>2],
        ['name' => 'Zapatos','category_id'=>2],
        ['name' => 'Botas','category_id'=>2],
        ['name' => 'Alpargatas','category_id'=>2],
        ['name' => 'Crocs','category_id'=>2],
        ['name' => 'Mochilas','category_id'=>3],
        ['name' => 'Bolsos','category_id'=>3],
        ['name' => 'Gorras','category_id'=>3],
        ['name' => 'Sombreros','category_id'=>3],
        ['name' => 'Muñequeras','category_id'=>3],
        ['name' => 'Lentes','category_id'=>3]
      ]);

    }
}
