<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    protected $fillable = ['Nombre','Modelo','TipoProducto','Descripcion','Stock','IdMarca','IdSubCategoria','IdDeposito'];

    public function subcategoria(){
    	return $this -> belongsTo('App\SubCategoria');
    }

    public function detallesAlmacen(){
    	return $this -> hasMany('App\DetalleAlmacen');
    }
    
    public function marca(){
    	return $this -> belongsTo('App\Marca');
    }

    public function detallesMovimientos(){
    	return $this -> hasMany('App\DetallesMovimiento');
    }
}
