<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_provider', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('role_id');

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('role_id')->references('id')->on('roles');

            $table->unique(['employee_id', 'provider_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_provider');
    }
}
