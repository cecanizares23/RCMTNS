<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Tipo_ave extends Model
{
    protected $table = 'tipo_aves';
    protected $fillable = ['nombre'];

/*	public function tipo_ave(){
    	return $this->belongsTo('finca\tipo_ave')->withDefault();
}*/

    public function linea_gens(){
    	return $this->hasMany('fincavicola\Linea_gen','id_tipo_ave'); 
    }

    public function razas(){
    	return $this->hasMany('fincavicola\Raza','id_tipo_ave');
    }
}
