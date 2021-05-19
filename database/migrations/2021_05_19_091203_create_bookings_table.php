<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
			 $table->integer('no_of_guests');
			$table->string('booking_status')->default('Pending');
			$table->float('total_amount')->nullable();
			$table->foreignId('event_id')->constrained('event_details');
			$table->foreignId('venue_id')->onDelete('cascade')->constrained();
			$table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('bookings');
    }
}
