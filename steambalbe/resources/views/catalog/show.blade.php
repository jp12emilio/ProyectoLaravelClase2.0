@extends('layouts.master')

@section('content')
<div class="container fondo">
	<div class="row">
		<div class="col-6"><h2>{{$arrayJuegos->name}}</h2></div>
		<div class="col-6 text-right"><h3>Precio: {{$arrayJuegos->price}}</h3></div>
	</div>
	<div class="row">
		<div class="col-8 text-center">
			<video src="{{$arrayJuegos->video}}" loop autoplay width="600px" height="337px" controls></video>
		</div>
		<div class="col-4 text-center">
			<img class="imagesh" src="{{$arrayJuegos->image}}"/>
			<h4>Lanzamiento: {{$arrayJuegos->launch}}</h4>
			<h4>Categoría: {{$arrayJuegos->category}}</h4>
			<h4>Creador: {{$arrayJuegos->creator}}</h4>
			<h4>Editor: {{$arrayJuegos->editor}}</h4>
		</div>
	</div>
		<div class="col-12">
			<h3>Descripción</h3>
			<p>{{$arrayJuegos->description}}</p>
			@if( !Auth::check())
			<a class="btn btn-success" href="{{ url('/login' ) }}">Comprar</a>
			@endif
			@if( Auth::check() && !auth()->user()->admin )
			<form action="{{ url('/cart') }}" method="POST" class="side-by-side">
				{!! csrf_field() !!}
				<input type="hidden" name="id" value="{{ $arrayJuegos->id }}">
				<input type="hidden" name="name" value="{{ $arrayJuegos->name }}">
				<input type="hidden" name="price" value="{{ $arrayJuegos->price }}">
				<input type="submit" class="btn btn-success" value="Añadir al carrito">
			</form>
			@endif
			@if( Auth::check() && auth()->user()->admin )
				<a class="btn btn-warning" href="{{ url('/catalog/edit/' . $arrayJuegos->id ) }}">Editar juego</a>
			@endif
			<a class="btn btn-light" href="{{ url('/catalog' ) }}">Volver al listado</a>
		</div>
</div>
@stop