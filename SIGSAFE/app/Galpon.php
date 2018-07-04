<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Galpon extends Model
{
    protected $table = 'galpons';
    protected $fillable = ['tope_max','obs_inicial','estado','altura','anchura','tipo_galpon','id_lote'];


    public function lote(){
    	return $this->belongsTo('fincavicola\Lote','id_lote');
    }

    public function materiales(){
        return $this->hasMany('fincavicola\Material','id_galpon'); 
    }

    public function g_pollos(){
    	return $this->hasMany('fincavicola\G_pollo','id_galpon'); 
    }

    public function g_pones(){
    	return $this->hasMany('fincavicola\G_pone','id_galpon'); 
    }

    public function g_cods(){
    	return $this->hasMany('fincavicola\G_cod','id_galpon'); 
    }

    public function reg_t_grups(){
        return $this->hasMany('fincavicola\Reg_t_grup','id_galpon'); 
    }

    public function aves(){
        return $this->hasMany('fincavicola\Ave','id_galpon'); 
    }

    public function detalle_trats(){
        return $this->hasMany('fincavicola\Detalle_trat','id_galpon'); 
    }

    public function t_grups(){
        return $this->hasMany('fincavicola\T_grup','id_galpon'); 
    }
}

