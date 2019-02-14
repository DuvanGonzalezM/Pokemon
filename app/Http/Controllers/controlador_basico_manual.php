<?php

namespace Pokemon\Http\Controllers;

use Pokemon\Http\Controllers\Controller;

class controlador_basico_manual extends Controller{
	public function prueba($nombre){
		return "Controlador basico a mano por: ".$nombre;
	}
}