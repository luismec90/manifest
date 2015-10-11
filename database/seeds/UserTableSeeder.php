<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User', 1)->create([
            'name' => 'Luis Fernando Montoya',
            'email' => 'luismec90@gmail.com',
            'password' => bcrypt('123'),
        ]);

        factory('App\User', 50)->create();
    }
}
