@extends('layouts.master')

@section('content')
    <div class="container fondo">
    <h3>Resultado de la búsqueda: {{$search}}</h3>
    @if (isset($message))
        <div class='bg-warning divSearch'>
            {{$message}}
        </div>
    @endif
    @if (isset($juegos))
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoria</th>
            </tr>
            </thead>
            <tbody>
            @foreach($juegos as $game)
                <tr>

                    <td><a href="{{ url('/catalog/show/' . $game->id ) }}">{{$game->name}}</a></td>
                    <td>{{$game->price}}</td>
                    <td><a href="{{ url('/searchForm/search/' . $game->category ) }}">{{$game->category}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endif
@stop