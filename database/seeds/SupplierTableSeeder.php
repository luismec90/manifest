<?php

use Illuminate\Database\Seeder;


class SupplierTableSeeder extends Seeder
{
    public function run()
    {
        factory('App\Supplier', 20)->create();
    }
}
