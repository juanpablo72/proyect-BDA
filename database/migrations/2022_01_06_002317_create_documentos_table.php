<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('sol_academica');
            $table->string('rec_academico');
            $table->string('cont_culminacionSV');
            $table->string('ActEvaPasantias');
            $table->string('CertPasantias');
            $table->string('ActDefensaTrabGrado');
            $table->string('ConstPracticas');
            $table->string('ActPasantiasHosp');
            $table->string('reingresoTrans');
            $table->string('RecoAmonestaciones');
            $table->string('FondoNegro');
            $table->string('copiaTituloB');
            $table->string('CopiaSimple');
            $table->string('CopiaPnacimiento');
            $table->string('PlanillaRusni');
            $table->string('PlanilladefensaInt');
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
        Schema::dropIfExists('documentos');
    }
}
