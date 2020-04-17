<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use App\Staff;
use App\Store;
use Faker\Generator as Faker;

$factory->define(Staff::class, function (Faker $faker) {
    $addresses = Address::all();
    $stores = Store::all();
    return [
        'address_id' => $faker->randomElement($addresses),
        'store_id' => $faker->randomElement($stores),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'active' => random_int(0, 1),
        'password' => $faker->password(),
        'picture_url' => $faker->imageUrl(),
    ];
});
