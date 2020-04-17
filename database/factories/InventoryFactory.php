<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Film;
use App\Inventory;
use Faker\Generator as Faker;

$factory->define(Inventory::class, function (Faker $faker) {
    
    $films = Film::all();

    return [
        'name'=>$faker->name(),
        'film_id'=>$faker->randomElement($films),
    ];
});
