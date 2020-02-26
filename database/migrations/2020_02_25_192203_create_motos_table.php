<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idCiudad');              //id empresa que crea la oferta
            $table->foreign('idCiudad', 'fk_motos_ciudades')
            ->on('ciudades')
            ->references('id');
            $table->unsignedBigInteger('idModelo');
            $table->foreign('idModelo', 'fk_motos_modelos')
            ->on('modelos')
            ->references('id');
            $table->unsignedBigInteger('idMarca');
            $table->foreign('idMarca', 'fk_motos_marcas')
            ->on('marcas')
            ->references('id');
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
        Schema::dropIfExists('motos');
    }
}
