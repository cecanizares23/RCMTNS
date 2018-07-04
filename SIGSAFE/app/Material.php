<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materials';
    protected $fillable = ['descripcion','fecha_ingreso','id_galpon'];

 	public function galpon (){
    	return $this->belongsTo('fincavicola\Galpon','id_galpon');
    }
}
