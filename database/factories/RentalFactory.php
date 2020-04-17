<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Inventory;
use App\Rental;
use App\Staff;
use Faker\Generator as Faker;

$factory->define(Rental::class, function (Faker $faker) {
    $staff = Staff::all();
    $customers = Customer::all();
    $inventories = Inventory::all();

    return [
        'staff_id' => $faker->randomElement($staff),
        'customer_id' => $faker->randomElement($customers),
        'inventory_id' => $faker->randomElement($inventories),
        'rental_date' => $faker->date(),
        'return_date' => $faker->date(),
    ];
});
