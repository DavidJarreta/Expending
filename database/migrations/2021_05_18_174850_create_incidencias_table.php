<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->bigIncrements('Id_incidencia');
            $table->date('Fecha_incidencia');
            $table->text('Descripcion');
            $table->string('Gravedad');
            $table->integer('Id_maquina')->unsigned();
            $table->foreign('Id_maquina')->references('Id_maquina')->on('maquinas');
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
        Schema::dropIfExists('incidencias');
    }
}
