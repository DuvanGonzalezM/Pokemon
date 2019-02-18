@extends('layouts.layout')
@section('titulo','Crear')
@section('contenido')
	<form class="form-group" method="POST" action="/entrenadores" enctype="multipart/form-data">
		@csrf
		@include('entrenadores.form_sub')
	</form>
@endsection