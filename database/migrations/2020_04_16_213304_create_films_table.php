<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id');
            $table->string('title');
            $table->text('Description');
            $table->year('release_year');
            $table->integer('rental_duration');
            $table->tinyInteger('rantal_rate'); //255 1 byte
            $table->integer('length');
            $table->tinyInteger('replacement_cost');
            $table->integer('rating');
            $table->text('special_features');
            $table->text('full_text');
            $table->timestamps();
            $table->foreign('language_id')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
