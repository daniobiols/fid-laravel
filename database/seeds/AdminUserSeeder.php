<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('users')->insert([
        'name'=> 'admin',
        'lastname'=>'admin',
        'email'=>'admin@admin.com',
        'password'=>\Hash::make('123456'),
        'is_admin'=>1
      ]);
    }
}
