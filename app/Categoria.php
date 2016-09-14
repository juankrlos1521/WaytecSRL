<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";

    protected $fillable ['Nombre', 'Descripcion'];

    public function subcategorias(){
    	return $this -> hasMany('App\SubCategoria');
    }
}
