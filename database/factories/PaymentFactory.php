<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Payment;
use App\Rental;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {

    $rentals = Rental::all();
    $customers = Customer::all();
    return [
        'rental_id' => $faker->randomElement($rentals),
        'customer_id' => $faker->randomElement($customers),
        'amount' => random_int(20, 5000),
        'payment_date' => $faker->date(),
    ];
});
