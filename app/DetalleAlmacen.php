<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleAlmacen extends Model
{
    protected $table = "detallealmacen";

    protected $fillable = ['IdProducto', 'IdLugarDeposito', 'Stock'];

    public function producto(){
    	return $this -> belongsTo('App\Producto');
    }
    public function lugarDeposito(){
    	return $this -> belongsTo('App\LugarDeposito');
    }
}
