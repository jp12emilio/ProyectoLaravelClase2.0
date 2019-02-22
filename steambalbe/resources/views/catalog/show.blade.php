@extends('layouts.master')

@section('content')
<div class="container fondo">
	<div class="row clear">
		<div class="col-6"><h2>{{$arrayJuegos->name}}</h2></div>
		<div class="col-6 text-right"><h3>Precio: {{$arrayJuegos->price}}</h3></div>
	</div>
	<div class="row">
		<div class="col-8 text-center">
			<video src="{{$arrayJuegos->video}}" loop autoplay width="600px" height="337px" controls></video>
		</div>
		<div class="col-4 text-center">
			<img src="{{$arrayJuegos->image}}" style="height:151px;width:324px"/>
			<h4>Lanzamiento: {{$arrayJuegos->launch}}</h4>
			<h4>Categoría: {{$arrayJuegos->category}}</h4>
			<h4>Creador: {{$arrayJuegos->creator}}</h4>
			<h4>Editor: {{$arrayJuegos->editor}}</h4>
			<a class="btn btn-warning" href="{{ url('/catalog/edit/' . $arrayJuegos->id ) }}">Editar pelicula</a>
			<a class="btn btn-light" href="{{ url('/catalog' ) }}">Volver al listado</a>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<h3>Descripción</h3>
			<p>{{$arrayJuegos->description}}</p>
		</div>
	</div>
</div>
@stop