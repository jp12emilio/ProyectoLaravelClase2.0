@extends('layouts.master')

@section('content')
<div class="fondo1">
<h3>Resultado de la búsqueda: {{$search}}</h3>
@if (isset($message))
  <div class='bg-warning' style='padding: 20px'>
      {{$message}}
  </div>
@endif
@if (isset($juegos))
<table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach($juegos as $game)
            <tr>
              	<td>{{$game->name}}</td></a>
                <td>{{$game->category}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@stop