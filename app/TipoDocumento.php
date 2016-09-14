<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = "tipodocumentos";

    protected $fillable = ['Descripcion'];

    public function documentos(){
    	return $this->hasMany('App\Documento');
    }
}
