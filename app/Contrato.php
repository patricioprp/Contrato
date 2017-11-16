<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = "contratos";
    protected $fillable = ['fondos_origen','indicador','monto','duracion','estado','tipo','actividad','desde','hasta','empleado_id'];
}
