<?php

// Database seeder
// Please visit https://github.com/fzaninotto/Faker for more options

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(P5_stats_model::class, function (Faker\Generator $faker) {

    return [
        'host_id' => $faker->word(),
        'port' => $faker->word(),
        'platform' => $faker->word(),
        'version' => $faker->word(),
        'uptime' => $faker->word(),
        'licenses' => $faker->word(),
    ];
});
