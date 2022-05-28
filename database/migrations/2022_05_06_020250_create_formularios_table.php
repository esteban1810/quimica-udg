<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('CorreoAlumno');
            $table->string('ApellidoPaternoAlumno');
            $table->string('ApellidoMaternoAlumno');
            $table->string('NombreAlumno');
            $table->string('CodigoAlumno');
            $table->string('GeneroAlumno');
            $table->string('CelularAlumno');
            $table->string('TelegramAlumno');
            $table->string('SemestreAlumno');
            $table->string('PMaEvaluar')->nullable();
            $table->string('TituloTrabajo')->nullable();
            $table->string('ApellidoPaternoDirector')->nullable();
            $table->string('ApellidoMaternoDirector')->nullable();
            $table->string('NombreDirector')->nullable();
            $table->string('CorreoDirector')->nullable();
            $table->string('AreaQuimicaTrabajo')->nullable();
            $table->string('TipoTrabajo')->nullable();
            $table->string('TipoModalidad')->nullable();
            $table->string('TipoCongreso')->nullable();
            $table->string('RecibioBeca')->nullable();
            $table->string('EstanciaBeca')->nullable();
            $table->string('ModalidadTitulacion')->nullable();
            $table->string('DocumentoEntregaras')->nullable();
            $table->string('CasoNoDirector')->nullable();
            $table->string('DocumentoPDFProyecto');
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
        Schema::dropIfExists('formularios');
    }
}
