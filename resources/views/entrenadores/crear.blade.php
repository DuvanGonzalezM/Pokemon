@extends('layouts.layout')
@section('titulo','Crear')
@section('contenido')
	<form class="form-group" method="POST" action="/entrenadores" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" class="form-control" name="nombre"><br>
		</div>
		<div class="form-group">
			<label for="">Descripcion</label>
			<textarea name="descripcion" class="form-control" rows="10" cols="40" placeholder="Escribe aquí la descripción"></textarea>
		</div>
		<div class="form-group">
			<label for="">Avatar</label>
			<input type="file"  name="avatar"><br>
		</div>
		<input type="submit" class="btn btn-primary">
	</form>
@endsection