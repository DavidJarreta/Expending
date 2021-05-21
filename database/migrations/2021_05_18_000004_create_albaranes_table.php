<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbaranesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albaranes', function (Blueprint $table) {
            $table->bigIncrements('Id_albaran');
            $table->string('Estado_maquina');
            $table->date('Fecha');
            $table->double('Dinero_recaudado');
            $table->integer('Contador');
            $table->bigInteger('Id_usario')->unsigned();
            $table->foreign('Id_usario')->references('id')->on('users');
            $table->biginteger('Id_maquina')->unsigned();
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
        Schema::dropIfExists('albarans');
    }
}
