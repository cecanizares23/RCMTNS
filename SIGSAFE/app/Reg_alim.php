<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Reg_alim extends Model
{
    protected $table = 'reg_alims';
    protected $fillable = ['fecha','cantidad','observacion','id_lote','id_detalle_alim'];

    public function lote(){
    	return $this->belongsTo('fincavicola\Lote','id_lote');
    }

    public function detalle_alim(){
    	return $this->belongsTo('fincavicola\Detalle_alim','id_detalle_alim');
    }
}
