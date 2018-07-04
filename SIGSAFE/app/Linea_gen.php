<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Linea_gen extends Model
{
    protected $table = 'linea_gens';
    protected $fillable = ['nombre','observacion','id_tipo_ave'];

/*  public function linea_gen(){
    	return $this->belongsTo('finca\linea_gen')->withDefault();
    }*/

    public function tipo_ave(){
    	return $this->belongsTo('finca\Tipo_ave','id_tipo_ave');
    }
}
