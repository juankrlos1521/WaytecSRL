<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Nombre')->unique();            
            $table->string('Modelo');$table->string('TipoProducto');
            $table->string('Descripcion');
            $table->integer('Stock');
            $table->integer('IdMarca');
            $table->integer('IdSubCategoria');
            $table->integer('IdDeposito');
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
        Schema::dropIfExists('producto');
    }
}
