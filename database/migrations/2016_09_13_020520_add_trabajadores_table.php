<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombres');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->date('FechaNacimiento');
            $table->string('Dni');
            $table->string('Direccion');
            $table->string('Telefono')->nullable();
            $table->string('Celular')->nullable();
            $table->date('FechaIngreso');
            $table->enum('EstadoClivil',['miembro','admin']);            
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
        Schema::dropIfExists('trabajadores');
    }
}
