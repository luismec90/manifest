<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = ['users','manifests','companies','company_user'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        foreach($this->toTruncate as $table) {
       //     DB::table($table)->truncate();
        }

        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
