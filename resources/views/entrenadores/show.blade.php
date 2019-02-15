@extends('layouts.layout')

@section('titulo','Entrenador')

@section('contenido')
	<div class="card text-center" style="width: 18rem; margin-top: 70px;">
		<img style="height: 130px; width: 130px; background-color: #EFEFEF; margin: 20px;" src="/imagenes/{{$entrenador->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
		<div class="card-body">
			<h5 class="card-title">{{$entrenador->nombre}}</h5>
			<p class="card-text">{{$entrenador->descripcion}}</p>
		</div>
	</div>
@endsection