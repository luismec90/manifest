<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Company::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name
    ];
});


$factory->define(App\Manifest::class, function (Faker\Generator $faker) {
    return [
        'company_id' => 1,
        'code' => str_random(5),
        'supplier' => $faker->name
    ];
});


$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'company_id' => 1,
        'manifest_id' => rand(1, 100),
        'reference' => str_random(5)
    ];
});