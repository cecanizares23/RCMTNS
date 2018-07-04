<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Reg_t_gru extends Model
{
    protected $table = 'reg_t_grups';
    protected $fillable = ['fecha','medicamento','cant_med','tipo_tratam','id_detalle_trat','id_t_grup','id_galpon'];

    public function galpon (){
    	return $this->belongsTo('fincavicola\Galpon','id_galpon');
    }

    public function t_grup (){
    	return $this->belongsTo('fincavicola\T_grup','id_t_grup');
    }

    public function detalle_trat (){
    	return $this->belongsTo('fincavicola\Detalle_trat','id_detalle_trat');
    }
}
