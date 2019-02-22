<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body style="background-image:url(./img/fondo.svg);background-repeat:no-repeat;background-attachment:fixed;">
  	@extends('layouts.master')
	@section('content')
		<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="bg-dark text-warning card-header text-center">
            Modificar película
         </div>
         <div class="card-body" style="padding:30px">
            <form method="POST">
            {{method_field('PUT')}}
            {{ csrf_field() }}
            <div class="form-group">
               <label for="title">Título</label>
               <input type="text" name="titulo" id="titulo" class="form-control">
            </div>

            <div class="form-group">
              <label for="year">Lanzamiento</label>
               <input type="text" name="lanzamiento" id="lanzamiento" class="form-control">
            </div>

            <div class="form-group">
              <label for="director">Creador</label>
               <input type="text" name="creador" id="creador" class="form-control">
            </div>
            <div class="form-group">
              <label for="poster">Editor</label>
               <input type="text" name="editor" id="editor"  class="form-control">
            </div>
            <div class="form-group">
              <label for="poster">Categoría</label>
               <input type="text" name="categoria" id="categoria" class="form-control">
            </div>
            <div class="form-group">
              <label for="poster">Imagen</label>
               <input type="text" name="imagen" id="imagen" class="form-control">
            </div>
            <div class="form-group">
              <label for="poster">Video</label>
               <input type="text" name="video" id="video" class="form-control">
            </div>
            
            <div class="form-group">
              <label for="poster">Clave</label>
               <input type="text" name="clave" id="clave" class="form-control">
            </div>
            <div class="form-group">
              <label for="poster">Precio</label>
               <input type="text" name="precio" id="precio" class="form-control">
            </div>
            <div class="form-group">
               <label for="synopsis">Descripción</label>
               <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea >
            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar película
               </button>
            </div>
          </form>
         </div>
      </div>
   </div>
</div>

	@stop
  </body>

</html>
