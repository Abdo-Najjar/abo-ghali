<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id');
            $table->foreignId('customer_id');
            $table->foreignId('inventory_id');
            $table->date('rental_date');
            $table->date('return_date');
            $table->timestamps();

            $table->foreign('staff_id')->references('id')->on('staff');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('inventory_id')->references('id')->on('inventories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
