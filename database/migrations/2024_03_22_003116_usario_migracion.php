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
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id'); /* PK */
            $table->string('nombre');
            $table->string('correo');
            $table->string('contraeña');
            $table->string('rol');

            $table->unsignedBigInteger('id_grupo'); /* FK */
            $table->foreign('id_grupo')->references('id')->on('grupo');
           
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
