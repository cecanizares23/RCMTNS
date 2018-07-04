<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Reg_va extends Model
{
    protected $table = 'reg_vas';
    protected $fillable = ['fecha','vacuna','cantidad','observacion','id_galpon','id_detalle_va'];


    public function galpon(){
    	return $this->belongsTo('fincavicola\Galpon','id_galpon');
    }

    public function detalle_va(){
    	return $this->belongsTo('fincavicola\Detalle_va','id_detalle_va');
    }
}
