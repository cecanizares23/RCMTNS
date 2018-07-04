<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Detalle_trat extends Model
{
    protected $table = 'detalle_trats';
    protected $fillable = ['dia','medicamento','cantidad_med','tipo_trat','id_plan_trat'];

    public function reg_t_grups(){
    	return $this->hasMany('fincavicola\Reg_t_grup','id_detalle_trat'); 
    }

    public function reg_t_indis(){
    	return $this->hasMany('fincavicola\Reg_t_indi','id_detalle_trat');
    }
}
