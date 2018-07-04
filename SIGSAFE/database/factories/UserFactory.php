<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(fincavicola\User::class, function (Faker $faker) {
	static $password;

    return [
        'nombre' => str_random(10),//$faker->nombre,
        'username' => str_random(10),//$faker->unique()->safeEmail,
        'password' =>  'secret',//$password ?: $password = bcrypt('secret'), // secret
        'remember_token' => str_random(10),
    ];
});
