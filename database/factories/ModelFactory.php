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

$factory->define(App\Domain\Entities\User::class, function (Faker\Generator $faker) {
    return [
    'name' => $faker->name,
    'email' => $faker->unique()->safeEmail,
    'phone' => $faker->phoneNumber,
    'address' => $faker->address,
    'level' => $faker->numberBetween(0,1),
    'class' => $faker->randomElement($array = array ('XII RPL 1','XII RPL 2','XII RPL 3')),
    'password' => bcrypt($faker->randomElement($array = array ('qwerty','12345678')))
    ];
});