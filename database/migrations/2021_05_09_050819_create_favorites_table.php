<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('favoritable_id')->nullable(false);
            $table->string('favoritable_type', 255)->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

            $table->index(['favoritable_id', 'favoritable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
