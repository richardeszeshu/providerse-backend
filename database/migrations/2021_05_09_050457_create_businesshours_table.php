<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinesshoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesshours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->nullable(false);
            $table->unsignedInteger('weekday')->nullable(false);
            $table->time('open_time')->nullable(false);
            $table->time('close_time')->nullable(false);
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees');

            $table->index(['weekday', 'open_time', 'close_time']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesshours');
    }
}
