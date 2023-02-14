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
        Schema::create('Aprendices', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->date('fecha de nacimiento');
            $table->string('numero de documento');
            $table->bigInteger('users_id')->unsigned()->nullable();
            $table->bigInteger('Fichas_id')->unsigned()->nullable();
            $table->bigInteger('Horarios_id')->unsigned()->nullable();

            $table->foreign('Fichas_id')->references('id')->on('Fichas');
            $table->foreign('Horarios_id')->references('id')->on('Horarios');
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('Aprendices');
    }
};
