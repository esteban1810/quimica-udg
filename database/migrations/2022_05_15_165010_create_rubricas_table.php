<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubricasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubricas', function (Blueprint $table) {
            $table->id();
            $table->string('apellido_paterno_evaluador')->nullable();
            $table->string('apellido_materno_evaluador')->nullable();
            $table->string('nombre_evaluador')->nullable();
            $table->string('correo')->nullable();
            $table->string('is_profesor')->nullable();
            $table->string('nombre_institucion')->nullable();
            $table->string('area_investigacion')->nullable();
            $table->string('codigo')->nullable();
            $table->string('area_investigacion_proyecto')->nullable();
            $table->string('id_trabajo')->nullable();
            $table->string('apellido_paterno_estudiante')->nullable();
            $table->string('apellido_materno_estudiante')->nullable();
            $table->string('nombre_estudiante')->nullable();
            $table->string('is_formal')->nullable();
            $table->string('is_puntual')->nullable();
            $table->string('rubrica21')->nullable();
            $table->string('rubrica22')->nullable();
            $table->string('rubrica23')->nullable();
            $table->string('rubrica24')->nullable();
            $table->string('rubrica25')->nullable();
            $table->string('rubrica31')->nullable();
            $table->string('rubrica32')->nullable();
            $table->string('rubrica33')->nullable();
            $table->string('rubrica41')->nullable();
            $table->string('rubrica42')->nullable();
            $table->string('rubrica43')->nullable();
            $table->string('evaluacion')->nullable();
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('rubricas');
    }
}
