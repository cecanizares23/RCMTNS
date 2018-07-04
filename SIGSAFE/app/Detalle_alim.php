<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Detalle_alim extends Model
{
    protected $table = 'detalle_alims';
    protected $fillable = ['dia','cantidad','id_alimento','id_etapa_p'];

    public function alimento (){
    	return $this->belongsTo('fincavicola\Alimento','id_alimento');
    }

    public function etapa_p (){
    	return $this->belongsTo('fincavicola\Etapa_p','id_etapa_p');
    }

    public function reg_alims(){
    	return $this->hasMany('fincavicola\Reg_alim','id_detalle_alim'); 
    }
}
