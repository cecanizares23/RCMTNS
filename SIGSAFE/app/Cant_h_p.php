<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Cant_h_p extends Model
{
    protected $table = 'cant_h_ps';
    protected $fillable = ['descripcion','gram_imi','gram_fin'];

    
    public function produc_ps(){
    	return $this->hasMany('fincavicola\Produc_p','id_cant_h_c');
    }
}
