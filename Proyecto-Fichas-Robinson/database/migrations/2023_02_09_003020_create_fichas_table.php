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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('trimestre');
            $table->bigInteger('user_id')->unsigned();


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('trimestre_id')->references('id')->on('trimestre');
            $table->foreign('programas_id')->references('id')->on('programos');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas');
    }
};
