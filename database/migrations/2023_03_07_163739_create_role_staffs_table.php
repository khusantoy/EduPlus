<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_staffs', function (Blueprint $table) {
            $table->unsignedBigInteger('staffs_id');
            $table->unsignedBigInteger('role_id');

            $table->foreign('staffs_id')->references('id')->on('staffs');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_staffs');
    }
};
