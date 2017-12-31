<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "empleados"; //se vincula la migracion con el nombre de la tabla empleados

    protected $fillable = ['dni','cuit','nombre','apellido','programa_id','contrato_id','distribution_id','full']; //campos permitidos para mostrar los objetos json, es decir que datos quieros mostrar
    //En este caso la funcion va en singular porque es el otro sentido de la relacion de uno a muchos
    public function distribution(){
      return $this->belongsTo('\App\Distribution');
    }
    public function programa(){
      return $this->belongsTo('\App\Programa');
    }
    public function contratos(){
        return $this->hasMany('\App\Contrato');
    }
    public function getFullAttribute(){
       return $this->dni.'-'.$this->nombre.'-'.$this->apellido;
    }
    public function scopeSearch($query, $nombre ){
       return $query->where('nombre', 'LIKE', "%$nombre%");
    }
}
