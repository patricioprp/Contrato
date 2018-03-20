<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
  protected $table = "comisiones";
  protected $fillable = ['desde','hasta','observaciones'];

  public function contrato(){
    return $this->belongsTo('\App\Contrato');

  }

}
