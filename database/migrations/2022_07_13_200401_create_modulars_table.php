<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulars', function (Blueprint $table) {
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
            $table->string('ProfesorAsignado')->nullable();
            $table->string('CoordinadorAsignado')->nullable();
            $table->string('DocumentoPDFProyecto');
            //Mismo tipo de dato que en tabla users, llave de usuarios
            $table->unsignedBigInteger('user_id')->unique();
            //Referencia a que usara llaves foraneas respecto a users id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('modulars');
    }
}
