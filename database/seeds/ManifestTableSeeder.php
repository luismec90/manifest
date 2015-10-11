<?php

use Illuminate\Database\Seeder;

class ManifestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Manifest', 100)->create();
    }
}
