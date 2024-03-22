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
        Schema::create('grupo', function (Blueprint $table) {
            $table->bigIncrements('id'); /* PK */
            $table->string('grupo_principiante');
            $table->string('grupo_intermedio');
            $table->string('grupo_avanzado');

            $table->unsignedBigInteger('id_usuario'); /* FK */
            $table->foreign('id_usuario')->references('id')->on('usuario');
           
            $table->unsignedBigInteger('id_curso'); /* FK */
            $table->foreign('id_curso')->references('id')->on('curso');
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
