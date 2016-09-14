<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = "marcas";

    protected $fillable = ['Nombre', 'Descripcion'];

    public function productos(){
    	return $this -> hasMany('App\Producto');
    }
}