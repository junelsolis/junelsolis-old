<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->paragraphs(2, true),
        'url' => $faker->url,
        'image_urls' => [$faker->imageUrl(), $faker->imageUrl()],
        'commit_count' => rand(100,200),
        'tags' => $faker->words,
    ];
});
