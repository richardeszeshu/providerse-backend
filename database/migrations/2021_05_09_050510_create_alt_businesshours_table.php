<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltBusinesshoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alt_businesshours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->nullable(false);
            $table->date('start_date')->nullable(false);
            $table->date('end_date')->nullable(false);
            $table->time('open_time');
            $table->time('close_time');
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees');

            $table->index(['start_date', 'end_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alt_businesshours');
    }
}
