@extends('layouts.layout')
@section('titulo','Crear')
@section('contenido')
	@include('common.errors')
	<form class="form-group" method="POST" action="/entrenadores" enctype="multipart/form-data">
		@csrf
		@include('entrenadores.form_sub')
	</form>
@endsection