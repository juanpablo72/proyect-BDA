<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ //$table->id();
    public function up()
    {
        Schema::create('datos_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('ciest');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('lugarnac');
            $table->string('edad');
            $table->string('correo');

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
        Schema::dropIfExists('datos_estudiantes');
    }
}
