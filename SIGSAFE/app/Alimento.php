<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    protected $table = 'alimentos';
    protected $fillable = ['nombre','tipo'];

    public function detalle_alims(){
    	return $this->hasMany('fincavicola\Detalle_alim','id_alimento'); 
    }
}
