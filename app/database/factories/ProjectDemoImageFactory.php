<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProjectDemoImage;
use Faker\Generator as Faker;

$factory->define(ProjectDemoImage::class, function (Faker $faker) {
    return [
        'project_demo_id' => $factory('App\ProjectDemo')->create()->id,
        'url' => 'https://placeimg.com/640/480/any',
    ];
});
