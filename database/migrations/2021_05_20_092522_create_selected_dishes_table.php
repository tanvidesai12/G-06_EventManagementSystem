<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectedDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selected_dishes', function (Blueprint $table) {
            $table->unsignedBigInteger('booking_id');
            $table->string('dish_name');
            $table->foreign('dish_name')->references('dish_name')->on('dishes');
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->primary(['booking_id','dish_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selected_dishes');
    }
}
