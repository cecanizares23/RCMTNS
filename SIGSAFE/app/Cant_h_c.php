<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Cant_h_c extends Model
{
    protected $table = 'cant_h_cs';
    protected $fillable = ['descripcion','gram_imi','gram_fin'];

    public function produc_cs(){
    	return $this->hasMany('fincavicola\Produc_c','id_cant_h_c');
    }

    
}
