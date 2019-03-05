@extends('layouts.master')

@section('content')
<div class="container fondo">
	<div class="row clear">
		<div class="col-12 text-center"><h1>Administrador</h1></div>
		<div class="offset-2 col-4 clear"><a class="nav-link btn btn-warning" href="{{url('/catalog')}}">
				Juegos
			</a></div>
		<div class="col-4 clear"><a class="nav-link btn btn-warning" href="{{url('/user')}}">
				Usuarios
			</a></div>
	</div>
</div>
@endsection
