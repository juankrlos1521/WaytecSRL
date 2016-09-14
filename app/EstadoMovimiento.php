<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoMovimiento extends Model
{
    protected $table = "estadosmovimientos";

    protected $fillable = ['Descripcion'];

    public function movimientosAlmacenes(){
    	return $this -> hasMany('App\MovimientoAlmacen');
}
