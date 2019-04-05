@extends('layouts.layout')

@section('titulo','Entrenadores')

@section('contenido')
	<div class="row">
		@foreach($entrenadores as $entrenador)
		<div class="col-sm">
			<div class="card text-center" style="width: 18rem;">
				<img src="imagenes/{{$entrenador->avatar}}" alt="" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">{{$entrenador->nombre}}</h5>
					<p class="card-text">Hola</p>
					<a href="#" class="btn btn-primary">Pefil</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
@endsection