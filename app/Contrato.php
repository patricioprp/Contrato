<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = "contratos";
    protected $fillable = ['fondos_origen','indicador','monto','duracion','estado','tipo','actividad','desde','hasta','empleado_id'];


    public function empleado(){
      return $this->belongsTo('\App\Empleado');

    }

    public function comisions(){
        return $this->hasMany('\App\Comision');
    }


    public function scopeSearch($query, $estado ){
       return $query->where('estado', 'LIKE', "%$estado%");
    }
}
