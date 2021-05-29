<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbaranAlimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albaran_alimento', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->biginteger('Id_albaran')->unsigned();
            $table->foreign('Id_albaran')->references('Id_albaran')->on('albaranes');
            $table->biginteger('Id_alimento')->unsigned();
            $table->foreign('Id_alimento')->references('Id_alimento')->on('alimentos');
            $table->integer('Cantidad');
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
        Schema::dropIfExists('albaran_alimento');
    }
}
