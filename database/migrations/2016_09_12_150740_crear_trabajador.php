<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTrabajador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Nombres');
            $table->string('ApPaterno');
            $table->string('ApMaterno');
            $table->date('FechaNacimiento');
            $table->string('Dni');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Celular');
            $table->string('CorreoElectronico');
            $table->date('FechaIngreso');
            $table->string('EstadoCivil');
            $table->string('Estado');
            $table->integer('IdNivelTrab');
            $table->string('Observaciones');
            $table->string('Contacto');
            $table->string('NroContacto');
            $table->string('Foto');
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
        Schema::dropIfExists('trabajador');
    }
}
