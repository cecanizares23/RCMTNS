<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Plan_trat extends Model
{
    protected $table = 'plan_trats';
    protected $fillable = ['enfermedad','duracion'];

     public function t_indis(){
    	return $this->hasMany('fincavicola\T_indi','id_plan_trat'); 
    }

     public function t_grups(){
    	return $this->hasMany('fincavicola\T_grup','id_plan_trat'); 
    }

     public function detalle_trats(){
    	return $this->hasMany('fincavicola\Detalle_trat','id_plan_trat'); 
    }
}
