<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Film;
use App\Language;
use Faker\Generator as Faker;

$factory->define(Film::class, function (Faker $faker) {

    $languages = Language::all();

    return [

        'language_id' => $faker->randomElement($languages),
        'title' => $faker->title,
        'Description' => $faker->sentence(50),
        'release_year' => $faker->year(),
        'rental_duration' => $faker->numberBetween(0, 200),
        'rantal_rate' => random_int(0, 19),
        'length' => $faker->numberBetween(0, 200),
        'replacement_cost' => random_int(0, 19),
        'rating' =>$faker->numberBetween(0, 200),
        'special_features'=>$faker->sentence(50),
        'full_text'=>$faker->sentence(50),

    ];
});
