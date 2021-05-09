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
            $table->unsignedBigInteger('addressable_id')->nullable(false);
            $table->string('addressable_type', 255)->nullable(false);
            $table->string('type', 10)->nullable(false);
            $table->unsignedBigInteger('country_id');
            $table->string('providence', 64);
            $table->string('city', 64);
            $table->string('address', 64);
            $table->string('postal_code', 64);
            $table->point('location');
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries');

            $table->index(['addressable_id', 'addressable_type']);
            $table->index('location');
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
