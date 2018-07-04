<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Produc_p extends Model
{
    protected $table = 'produc_ps';
    protected $fillable = ['fecha','peso','cantidad','observacion','id_galpon','id_cant_h_p'];

    public function galpon (){
    	return $this->belongsTo('fincavicola\Galpon','id_galpon');
    }

    public function cant_h_p (){
    	return $this->belongsTo('fincavicola\Cant_h_p','id_cant_h_p');
    }


}
