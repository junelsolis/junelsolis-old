<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'subtitle' => $faker->sentence,
        'description' => $faker->paragraphs(2, true),
        'urls' => [$faker->url, $faker->url],
        'image_urls' => [$faker->imageUrl(), $faker->imageUrl()],
        'commit_count' => rand(100,200),
        'tags' => $faker->words,
    ];
});
