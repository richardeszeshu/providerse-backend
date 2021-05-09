<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false);
            $table->text('description');
            $table->float('price')->nullable(false);
            $table->float('special_price');
            $table->unsignedBigInteger('currency_id')->nullable(false);
            $table->unsignedInteger('length')->nullable(false);
            $table->timestamps();

            $table->foreign('currency_id')->references('id')->on('currencies');

            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
