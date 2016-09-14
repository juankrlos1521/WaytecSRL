<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'usuarios';
    protected $fillable = [
        'NombreUsuario', 'Contrasena', 'IdTrabajador','tipo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Contrasena', 'remember_token',
    ];

    public function trabajador(){
        return $this->belongsTo('App\Trabajador');
    }

    public function movimientosAlmacen(){
        return $this->hasMany('App\MovimientoAlmacen');
    }
}
