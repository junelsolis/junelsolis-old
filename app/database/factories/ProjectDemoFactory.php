<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProjectDemo;
use Faker\Generator as Faker;

$factory->define(ProjectDemo::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'description' => $faker->paragraphs(2, true),
        'logo_image_url' => 'https://placeimg.com/640/480/any',
        'live_site_url' => $faker->url,
    ];
});
