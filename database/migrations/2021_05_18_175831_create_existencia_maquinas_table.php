<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExistenciaMaquinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('existencia_maquinas', function (Blueprint $table) {
            $table->bigIncrements('Id_Existencia');
            $table->bigIncrements('Id_maquina')->unsigned();
            $table->foreign('Id_maquina')->references('Id_maquina')->on('maquinas');
            $table->integer('Id_alimento')->unsigned();
            $table->foreign('Id_alimento')->references('Id_alimento')->on('alimentos');
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
        Schema::dropIfExists('existencia_maquinas');
    }
}
