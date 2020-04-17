<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\Country;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {

    $countries = Country::all();
    
    return [
    
        'name' =>$faker->name(),
        'country_id'=>$faker->randomElement($countries)
    
    ];
});
