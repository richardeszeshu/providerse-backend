<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false);
            $table->text('description');
            $table->string('phone', 15);
            $table->string('vat_number', 15);
            $table->unsignedBigInteger('default_currency')->nullable(false);
            $table->timestamps();

            $table->foreign('default_currency')->references('id')->on('currencies');

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
        Schema::dropIfExists('providers');
    }
}
