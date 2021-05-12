<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_dishes', function (Blueprint $table) {
            $table->string('dish_name');
            $table->string('package_name');
            $table->string('sub_package_name');
            $table->foreign('dish_name')->references('dish_name')->on('dishes');
            $table->foreign('package_name')->references('package_name')->on('packages');
            $table->foreign('sub_package_name')->references('sub_package_name')->on('sub_packages');
            $table->primary(['dish_name','package_name','sub_package_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_dishes');
    }
}
