<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFechasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fechas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('titulo_fecha')->nullable();
            $table->string('cuerpo_fecha')->nullable();
            $table->string('asunto_fecha')->nullable();
            $table->integer('mostrar_fecha_vencida')->nullable();
            $table->string('jerarquia_mostrar1')->nullable();
            $table->string('jerarquia_mostrar2')->nullable();
            $table->string('jerarquia_mostrar3')->nullable();
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
        Schema::dropIfExists('fechas');
    }
}
