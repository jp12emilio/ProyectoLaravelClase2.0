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
        @foreach( $usuarios as $key => $user )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <a href="{{ url('/user/show/' . $user->id ) }}">
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$user->user}}
                    </h4>
                </a>
                <h6 style="min-height:45px;margin:5px 0 10px 0">
                    <b>{{$user->address}}</b>
                </h6>
            </div>
        @endforeach
    </div>
</div>
@stop
</body>
</html>