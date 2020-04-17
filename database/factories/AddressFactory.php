<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use App\City;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    $cities = City::all();
    return [
        'city_id' =>$faker->randomElement($cities),
        'address' =>$faker->address,
        'address2' =>$faker->address,
        'district' => random_int(0 , 200),
        'postal_code'=>$faker->postcode,
        'phone' =>$faker->phoneNumber,
    ];
});
