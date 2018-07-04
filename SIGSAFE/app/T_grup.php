<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class T_grup extends Model
{
    protected $table = 't_grups';
    protected $fillable = ['fecha_inicio','id_plan_trat','id_galpon'];

    public function galpon (){
    	return $this->belongsTo('fincavicola\Galpon','id_galpon');
    }

    public function plan_trat (){
    	return $this->belongsTo('fincavicola\Plan_trat','id_plan_trat');
    }

     public function reg_t_grups(){
    	return $this->hasMany('fincavicola\Reg_t_grup','id_t_grup'); 
    }
}
