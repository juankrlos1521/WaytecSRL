<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = "documentos";

    protected $fillable = ['NroDocumento', 'IdTipo', 'Imagen'];

    public function tipoDocumento(){
    	return $this->belongsTo('App\TipoDocumento');
    }

    public function movimientosAlmacen(){
    	return $this->hasMany('App\MovimientoAlmacen');
    }
}
