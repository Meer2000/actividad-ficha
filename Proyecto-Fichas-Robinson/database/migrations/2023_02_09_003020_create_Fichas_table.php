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
        Schema::create('Fichas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('Trimestre_id')->unsigned();
            $table->bigInteger('Programas_id')->unsigned();


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('Trimestre_id')->references('id')->on('Trimestre');
            $table->foreign('Programas_id')->references('id')->on('Programas');
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
        Schema::dropIfExists('Fichas');
    }
};
