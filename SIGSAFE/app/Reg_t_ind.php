<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Reg_t_ind extends Model
{
    protected $table = 'reg_t_inds';
    protected $fillable = ['fecha','medicamento','cant_med','tipo_tratam','id_detalle_trat','t_grup','id_galpon'];

    public function t_indi (){
    	return $this->belongsTo('fincavicola\T_indi','id_t_indi');
    }

    public function detalle_trat (){
    	return $this->belongsTo('fincavicola\Detalle_trat','id_detalle_trat');
    }
}
