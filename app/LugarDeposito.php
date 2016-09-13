<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarDeposito extends Model
{
    protected $table = "lugaresdepositos";

    protected $fillable = ['Descripcion'];

    public function detallesAlmacen(){
    	return $this -> hasMany('App\DetalleAlmacen');
    }
}
