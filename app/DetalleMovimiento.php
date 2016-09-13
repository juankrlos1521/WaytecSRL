<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleMovimiento extends Model
{
    protected $table = "detallemovimientos";

    protected $fillable = ['IdMovimiento', 'IdProducto', 'CantidadProd'];

    public function producto(){
    	return $this -> belongsTo('App\Producto');
    }
    public function movimientoAlmacen(){
    	return $this -> belongsTo('App\MovimientoAlmacen');
    }
}
