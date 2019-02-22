@extends('layouts.master')

@section('content')
<div class="fondo1">
<div class="row clear">
    @foreach( $arrayJuegos as $key => $games )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center clear">
        <a href="{{ url('/catalog/show/' . $games->id ) }}">
            <img src="{{$games->image}}" style="height:151px;width:324px"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$games->name}}
            </h4>
        </a>
        <h6 style="min-height:45px;margin:5px 0 10px 0">
            <b>{{$games->price}}€</b>
        </h6>
    </div>
    @endforeach
</div>
</div>
@stop