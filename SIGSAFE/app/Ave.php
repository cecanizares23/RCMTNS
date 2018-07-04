<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Ave extends Model
{
    protected $table = 'aves';
    protected $fillable = ['fecha_ingreso','fecha_baja','obs_inicial','peso','edad','sexaje','id_raza','id_galpon'];

    public function raza (){
    	return $this->belongsTo('fincavicola\Raza','id_raza');
    }

    public function galpon (){
    	return $this->belongsTo('fincavicola\Galpon','id_galpon');
    }
}
