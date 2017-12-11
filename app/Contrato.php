<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = "contratos";
    protected $fillable = ['fondos_origen','indicador','monto','duracion','estado','tipo','actividad','desde','hasta','empleado_id'];


    public function empleado(){
      /*return $this->belongsTo('\App\Empleado');*/
      return $this->belongsToMany('\App\Empleado');
    }
}
