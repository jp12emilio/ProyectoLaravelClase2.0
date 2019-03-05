<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
@extends('layouts.master')

@section('content')

<div class="container fondo">
    <div class="row">
        <div class="col-12 text-center"><h3>Usuarios</h3></div>
        <div class="col-12 text-right">
            <a class="btn btn-warning mr-5" href="{{ url('/user/create' ) }}">+ Insertar Usuario</a>
        </div>
        @foreach( $usuarios as $key => $user )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                    <h4 class="h4Index">
                        {{$user->user}}
                    </h4>
                <h6 class="h6Index">
                    <b>{{$user->address}}</b>
                </h6>
                <a class="btn btn-warning" href="{{ url('/user/edit/' . $user->id ) }}">Editar usuario</a>
            </div>
        @endforeach
    </div>
</div>
@stop
</body>
</html>