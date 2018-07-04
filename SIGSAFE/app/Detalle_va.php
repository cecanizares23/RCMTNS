<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Detalle_va extends Model
{
    protected $table = 'detalle_vas';
    protected $fillable = ['dia','vacuna','cantidad','id_tipo_ave', 'id_etapa_p'];


    public function tipo_ave(){
    	return $this->belongsTo('finca\Tipo_ave','id_tipo_ave');
    }

    public function etapa_p (){
    	return $this->belongsTo('fincavicola\Etapa_p','id_etapa_p');
    }
}
