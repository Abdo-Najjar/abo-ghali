<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(FilmSeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(StoreSeeder::class);
        $this->call(StaffSeeder::class);
        $this->call(RentalSeeder::class);
        $this->call(PaymentSeeder::class);
    }
}
