<?php

namespace fincavicola;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    protected $fillable = ['name','imagen'];


	public function getRouteKeyName(){
		return 'slug';
	}
}
