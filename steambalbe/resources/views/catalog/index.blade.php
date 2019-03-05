@extends('layouts.master')

@section('content')
<div class="fondo1">
<div class="row">
    <div class="col-12 text-center"><h3>Juegos</h3></div>
    <div class="col-12 text-right">
        <a class="btn btn-warning mr-5" href="{{ url('/catalog/create' ) }}">+ Insertar Juego</a>
    </div>
    @foreach( $arrayJuegos as $key => $games )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center clear">
        <a href="{{ url('/catalog/show/' . $games->id ) }}">
            <img class="imagein" src="{{$games->image}}"/>
            <h4 class="titulojuego">
                {{$games->name}}
            </h4>
        </a>
        <h6>
            <b>{{$games->price}}€</b>
        </h6>
    </div>
    @endforeach
</div>
</div>
@stop