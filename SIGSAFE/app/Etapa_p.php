<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Etapa_p extends Model
{
    protected $table = 'etapa_ps';
    protected $fillable = ['duracion','nombre','descripcion'];

    public function detalle_alims(){
    	return $this->hasMany('fincavicola\Detalle_alim','id_etapa_p'); 
    }

    public function detalle_vas(){
    	return $this->hasMany('fincavicola\Detalle_va','id_etapa_p'); 
    }
}
