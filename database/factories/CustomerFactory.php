<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    $addresses = Address::all();
    return [
        'address_id'=>$faker->randomElement($addresses),
        'first_name'=>$faker->firstName,
        'last_name'=>$faker->lastName,
        'email'=>$faker->unique()->safeEmail,
        'active'=> random_int(0,1),
    ];
});
