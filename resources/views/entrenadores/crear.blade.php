@extends('layouts.layout')
@section('titulo','Crear')
@section('contenido')
	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form class="form-group" method="POST" action="/entrenadores" enctype="multipart/form-data">
		@csrf
		@include('entrenadores.form_sub')
	</form>
@endsection