<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class G_pone extends Model
{
    protected $table = 'g_pones';
    protected $fillable = ['id_galpon'];

    public function galpon (){
    	return $this->belongsTo('fincavicola\Galpon','id_galpon');
    }
}
