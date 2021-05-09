<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('addressable_id');
            $table->string('addressable_type', 255);
            $table->string('type', 10);
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('providence', 64)->nullable();
            $table->string('city', 64)->nullable();
            $table->string('address', 64)->nullable();
            $table->string('postal_code', 64)->nullable();
            $table->point('location')->nullable();
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries');

            $table->index(['addressable_id', 'addressable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
