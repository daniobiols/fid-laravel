<?php

use Illuminate\Database\Seeder;
// use Faker\Factory as Faker;

class userAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
      // $faker=Faker::Create();
      \DB::table('users')->insert(array(
        'name'=> 'admin',
        'lastname'=>'admin',
        'email'=>'admin@admin.com',
        'password'=>\Hash::make('123456'),
        'is_admin'=>1
      ));
    }
}
