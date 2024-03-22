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
        Schema::create('kitrobotica', function (Blueprint $table) {
            $table->bigIncrements('id'); /* PK */
            $table->string('nombre');
            $table->string('tipo');

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
