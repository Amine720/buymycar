<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('maker');
            $table->string('year');
            $table->integer('price');
            $table->integer('mileage');
            $table->text('description');
            $table->text('images');
            $table->text('city');
            $table->text('type');
            $table->integer('doors');
            $table->integer('cylinders');
            $table->text('transmission');
            $table->text('fuel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
