<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_visitas', function (Blueprint $table) {
            $table->id();
            $table->string('folio')->nullable();
            $table->string('fecha')->nullable();
            $table->string('inspector')->nullable();
            $table->string('seConocePropietario')->nullable();
            $table->string('nombrePropietario')->nullable();
            $table->string('numExt')->nullable();
            $table->string('numInt')->nullable();
            $table->string('calle')->nullable();
            $table->string('fraccionamiento')->nullable();
            $table->string('colonia')->nullable();
            $table->string('acompanante1')->nullable();
            $table->string('acompanante2')->nullable();
            $table->string('acompanante3')->nullable();
            $table->string('hechos')->nullable();
            $table->string('nombreVisitado')->nullable();
            $table->string('manifiestaSer')->nullable();
            $table->string('seIdentifica')->nullable();
            $table->string('numIdentificacion')->nullable();
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
        Schema::dropIfExists('orden_visitas');
    }
}
