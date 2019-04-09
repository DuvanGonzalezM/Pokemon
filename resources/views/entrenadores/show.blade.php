@extends('layouts.layout')

@section('titulo','Entrenador')

@section('contenido')
@if(session('status'))
	<div class="alert alert-success">
		{{session('status')}}
	</div>
@endif
		<img style="height: 130px; width: 130px; background-color: #EFEFEF; margin: 20px;" src="/imagenes/{{$entrenador->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
		<div class="card-body text-center">
			<h5 class="card-title">{{$entrenador->nombre}}</h5>
			<p class="card-text">{{$entrenador->descripcion}}</p>
			<a href="/entrenadores/{{$entrenador->slug}}/edit" class="btn btn-primary">Editar</a>
		<form method="POST" action="/entrenadores/{{$entrenador->slug}}">
			@method('DELETE')
			@csrf
			<input type="submit" name="Eliminar" value="Eliminar" class="btn btn-danger">
		</form>
		</div>
@endsection