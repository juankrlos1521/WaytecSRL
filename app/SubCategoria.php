<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    protected $table = "subcategorias";

    protected $fillable = ['Nombre','Descripcion','IdCategoria'];

    public function categoria(){
    	return $this -> belongsTo('App\Categoria');
    }

    public function productos(){
    	return $this -> hasMany('App\Producto');
    }
}
