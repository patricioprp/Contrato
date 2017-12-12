<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
  protected $table = "programas" ;

  protected $fillable = ['nombre'];

  //definiendo las relaciones: una Reparticion puede tener muchos empleados, relacion uno  a muchos
// el nombre de la funcion(empleados)debe ir en plural porque son muchos, relaciones de una reparticion a muchos empleados
  public function empleados(){
    //relacion uno a muchos
    return $this->hasMany('\App\Empleado'); //\App\Empleado es la ruta del otro modelo, en el modelo Empleado tambien debe existir esta relacion

  }
}
