<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = "trabajadores";

    protected $fillable = ['Nombres','ApPaterno','ApMaterno','FechaNacimiento','Dni','Direccion','Telefono','Celular','CorreoElectronico','FechaIngreso','EstadoCivil','Estado'),'IdNivelTrab','Observaciones','Contacto','NroContacto','Foto'];

    public function users(){
    	return $this->hasMany('App\User');
    }
    public function nivelTrabajador(){
    	return $this->belongsTo('App\NivelTrabajador');
    }

    public function movimientosAlmacen(){
    	return $this->hasMany('App\MovimientoAlmacen');
    }
}
