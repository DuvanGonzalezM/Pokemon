@extends('layouts.layout')

@section('titulo','Editar')

@section('contenido')
	<form class="form-group" method="POST" action="/entrenadores/{{$entrenador->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<img style="height: 130px; width: 130px; background-color: #EFEFEF; margin: 20px;" src="/imagenes/{{$entrenador->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
		@include('entrenadores.form_sub')
	</form>
@endsection