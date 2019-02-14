<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('mi_primera_ruta', function(){ //Rutas 'normales'
	return "hello word";
});
Route::get('nombre/{nombre}/apellido/{apellido?}', function($nombre,$apellido = null){//Rutas con parametros, donde se indica que uno de ellos es parametro opcional con el signo "?" u de le da un default de "null"
	return "Hola ".$nombre.$apellido;
});
Route::get('prueba/{nombre}','controlador_basico_manual@prueba');//Ruta con redireccionamiento a un controlador y solicitando cierta funcion separandolo con "@"
Route::resource('entrenadores', 'EntrenadorControlador');//Ruta resource que nos redirige a un controlador resource y aplica igual que el anterior a las funciones