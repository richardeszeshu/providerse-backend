<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rateable_id')->nullable(false);
            $table->string('rateable_type', 255)->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->integer('rating')->nullable(false);
            $table->text('comment')->nullable(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

            $table->index(['rateable_id', 'rateable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
