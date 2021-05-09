<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_service', function (Blueprint $table) {
            $table->unsignedBigInteger('booking_id')->nullable(false);
            $table->unsignedBigInteger('service_id')->nullable(false);
            $table->unsignedBigInteger('employee_id')->nullable(false);
            $table->timestamp('start_at')->nullable(false);
            $table->timestamp('end_at')->nullable(false);
            $table->float('price')->nullable(false);
            $table->unsignedBigInteger('currency_id')->nullable(false);
            $table->timestamps();

            $table->foreign('booking_id')->references('id')->on('bookings');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('currency_id')->references('id')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_service');
    }
}
