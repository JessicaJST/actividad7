<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    

    /*Atributos, Claves Primarias (PK) y Claves Externas (FK)*/
    public function up(): void
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->bigIncrements('id'); /* PK */
            $table->string('grupo_principiante');
            $table->string('grupo_intermedio');
            $table->string('grupo_avanzado');

            $table->unsignedBigInteger('id_kitRobotica'); /* FK */
            $table->foreign('id_kitRobotica')->references('id')->on('kitrobotica');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
