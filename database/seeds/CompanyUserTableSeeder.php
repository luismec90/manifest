<?php

use Illuminate\Database\Seeder;

class CompanyUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_user')->insert(['company_id' => 1, 'user_id' => 1, 'role' => 1]);
        DB::table('company_user')->insert(['company_id' => 1, 'user_id' => 2, 'role' => 2]);
    }
}
