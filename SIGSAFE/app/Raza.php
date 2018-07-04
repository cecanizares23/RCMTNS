<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    protected $table = 'raza';
    protected $fillable = ['nombre','id_tipo_ave'];

/*  public function raza(){
    	return $this->belongsTo('finca\raza')->withDefault();
    }*/

    public function tipo_ave(){
    	return $this->belongsTo('fincavicola\Tipo_ave','id_tipo_ave');
    }

}
