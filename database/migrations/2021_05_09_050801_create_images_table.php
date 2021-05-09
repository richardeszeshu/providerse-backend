<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('imageable_id')->nullable(false);
            $table->string('imageable_type', 255)->nullable(false);
            $table->string('type', 10)->nullable(false);
            $table->string('path', 255)->nullable(false);
            $table->timestamps();

            $table->index(['imageable_id', 'imageable_type']);
            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
