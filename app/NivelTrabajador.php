<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelTrabajador extends Model
{
    protected $table = "niveltrabajadores";

    protected $fillable = ['NombrePuesto', 'Sueldo', 'Observacion'];

    public function trabajadores(){
    	return $this -> hasMany('App\Trabajador');
    }
}
