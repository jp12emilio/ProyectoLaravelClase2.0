@extends('layouts.master')

@section('content')

<div class="container fondo">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center text-warning bg-dark">
            Modificar Usuario
         </div>
         <div class="card-body">

        <form class="col-md-12" action="#" method="POST">
			{{ method_field('PUT') }}			

            {{ csrf_field() }}

            <div class="form-group">
               <label for="name">Nombre</label>
               <input type="text" name="name" id="name" class="form-control" value="{{$usuario['name']}}">
            </div>

            <div class="form-group">
               <label for="subname">Apellido</label>
               <input type="text" name="subname" id="subname" class="form-control" value="{{$usuario->subname}}">
            </div>

            <div class="form-group">
               <label for="email">Email</label>
               <input type="text" name="email" id="email" class="form-control" value="{{$usuario->email}}">
            </div>

            <div class="form-group">
               <label for="password">Password</label>
               <input type="text" name="password" id="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="address">Dirección</label>
                <input type="text" name="address" id="address" class="form-control" value="{{$usuario->address}}">
            </div>
            <input type="hidden" name="admin" id="admin" class="form-control" value="{{$usuario->admin}}">
            <div class="form-group">
               <label for="user">Tipo de usuario</label>
               <input type="text" name="user" id="user" class="form-control" value="{{$usuario->user}}">
            </div>

            <div class="form-group text-center">
               <button type="submit" class="btn btn-warning button">
                   Modificar Usuario
               </button>
            </div>

            </form>

         </div>
      </div>
   </div>
</div>

@stop