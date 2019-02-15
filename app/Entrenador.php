<?php

namespace Pokemon;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
	public function getRouteKeyName(){
		return 'slug';
	}
}
