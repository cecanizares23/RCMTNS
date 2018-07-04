<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $table = 'lotes';
    protected $fillable = ['ubicacion','obs_inicial'];

    public function galpons(){
    	return $this->hasMany('fincavicola\Galpon','id_lote');
    }
}
