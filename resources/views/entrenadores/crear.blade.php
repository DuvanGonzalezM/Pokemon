@extends('layouts.layout')
@section('titulo','Crear')
@section('contenido')
	<form class="form-group" method="POST" action="/entrenadores">
		@csrf
		<div class="container">
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre"><br>
				<input type="submit" class="btn btn-primary">
			</div>
		</div>
	</form>
@endsection