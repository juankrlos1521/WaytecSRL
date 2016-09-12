<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearMovimientoalmacen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientoalmacen', function (Blueprint $table) {
            $table->increments('Id');
            $table->date('Fecha');
            $table->string('TipoMovimiento');
            $table->integer('IdEstado');
            $table->integer('IdTrabajador');
            $table->integer('IdDocumento');
            $table->integer('IdUsuario');
            $table->string('Observaciones');
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
        Schema::dropIfExists('movimientoalmacen');
    }
}
