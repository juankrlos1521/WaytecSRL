<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovimientoAlmacen extends Model
{
    protected $table = "movimientosalmacen";

    protected $fillable = ['Fecha', 'TipoMovimiento', 'IdEstado', 'IdTrabajador', 'IdDocumento', 'IdUsuario', 'Observaciones'];

    public function detallesMovimientos(){
    	return $this->hasMany('App\DetalleMovimiento');
    }

    public function estradoMov(){
    	return $this->belongsTo('App\EstradoMovimiento');
    }

    public function documento(){
    	return $this->belongsTo('App\Documento');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function trabajador(){
    	return $this->belongsTo('App\Trabajador');
    }
}
