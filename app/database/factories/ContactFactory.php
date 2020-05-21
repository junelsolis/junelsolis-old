<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'email' => $faker->safeEmail,
        'message' => $faker->sentences(8, true),
    ];
});
