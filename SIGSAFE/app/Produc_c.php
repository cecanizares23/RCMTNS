
<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Produc_c extends Model
{
    protected $table = 'produc_cs';
    protected $fillable = ['fecha','peso','cantidad','observacion','id_galpon','id_cant_h_c'];

    public function galpon (){
    	return $this->belongsTo('fincavicola\Galpon','id_galpon');
    }

    public function cant_h_c (){
    	return $this->belongsTo('fincavicola\Cant_h_c','id_cant_h_c');
    }
}
