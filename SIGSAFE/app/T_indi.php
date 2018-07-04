<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class T_indi extends Model
{
    protected $table = 't_indis';
    protected $fillable = ['fecha_inicio','id_plan_trat','id_ave'];

    public function ave (){
    	return $this->belongsTo('fincavicola\Ave','id_ave');
    }

    public function plan_trat (){
    	return $this->belongsTo('fincavicola\Plan_trat','id_plan_trat');
    }

    public function reg_t_indis(){
    	return $this->hasMany('fincavicola\Reg_t_indi','id_t_indi'); 
    }
}
