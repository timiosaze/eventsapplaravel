<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        //
        'event_name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'event_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'venue' => $faker->state . " " . $faker->country
    ];
});
