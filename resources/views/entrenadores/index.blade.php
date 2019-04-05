@extends('layouts.layout')

@section('titulo','Entrenadores')

@section('contenido')
	<div class="row">
		@foreach($entrenadores as $entrenador)
<<<<<<< HEAD
		<div class="col-sm">
			<div class="card text-center" style="width: 18rem;">
				<img src="imagenes/{{$entrenador->avatar}}" alt="" class="card-img-top">
=======
		<div  class="col-sm">
			<div class="card text-center" style="width: 18rem; margin-top: 70px;">
				<img style="height: 130px; width: 130px; background-color: #EFEFEF; margin: 20px;" src="imagenes/{{$entrenador->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
>>>>>>> 85adf061597b2fc319e945f16be2357ba9aef30c
				<div class="card-body">
					<h5 class="card-title">{{$entrenador->nombre}}</h5>
					<p class="card-text">{{$entrenador->descripcion}}</p>
					<a href="/entrenadores/{{$entrenador->slug}}" class="btn btn-primary">Ver más...</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
@endsection