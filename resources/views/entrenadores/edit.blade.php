@extends('layouts.layout')

@section('titulo','Editar')

@section('contenido')
	{!! Form::open(['route' => ['entrenadores.update',$entrenador->slug], 'method' => 'POST', 'files' => true])!!}
		@method('PUT')
		@csrf
		<img style="height: 130px; width: 130px; background-color: #EFEFEF; margin: 20px;" src="/imagenes/{{$entrenador->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
		<div class="form-group">
			{!! Form::label('name', 'Nombre')!!}
			{!! Form::text('name', ['class'=>'form-control', 'value' => '$entrenador->nombre'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('name', 'Descripcion')!!}
			<textarea style="height: 200px;" name="descripcion" class="form-control" rows="10" cols="40" placeholder="Escribe aquí la descripción">{{$entrenador->descripcion}}</textarea>
		</div>
	{!! Form::close()!!}
	<form class="form-group" method="POST" action="/entrenadores/{{$entrenador->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<img style="height: 130px; width: 130px; background-color: #EFEFEF; margin: 20px;" src="/imagenes/{{$entrenador->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" value="{{$entrenador->nombre}}" class="form-control" name="nombre"><br>
		</div>
		<div class="form-group">
			<label for="">Descripcion</label>
			<textarea style="height: 200px;" name="descripcion" class="form-control" rows="10" cols="40" placeholder="Escribe aquí la descripción">{{$entrenador->descripcion}}</textarea>
		</div>
		<div class="form-group">
			<label for="">Avatar</label>
			<input type="file"  name="avatar"><br>
		</div>
		<input type="submit" class="btn btn-primary" value="Enviar">
	</form>
@endsection