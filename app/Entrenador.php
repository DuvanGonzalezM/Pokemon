<?php

namespace Pokemon;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model{
	protected $fillable =['nombre','descripcion','avatar','slug'];
	public function getRouteKeyName(){
		return 'slug';
	}
}
