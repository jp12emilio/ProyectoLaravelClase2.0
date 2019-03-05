@extends('layouts.master')

@section('content')
<body>
   <div>
         <div class="offset-md-3 col-md-6">
            <div class="card">
               <div class="card-header text-center text-warning bg-dark">
            Modificar Juego
         </div>
         <div class="card-body">

        <form class="col-md-12" action="#" method="POST">
			{{ method_field('PUT') }}			

            {{ csrf_field() }}

            <div class="form-group">
               <label for="name">Titulo</label>
               <input type="text" name="name" id="name" class="form-control" value="{{$juego->name}}">
            </div>

            <div class="form-group">
               <label for="price">Precio</label>
               <input type="text" name="price" id="price" class="form-control" value="{{$juego->price}}">
            </div>

            <div class="form-group">
               <label for="category">Categoria</label>
               <input type="text" name="category" id="category" class="form-control" value="{{$juego->category}}">
            </div>

            <div class="form-group">
               <label for="image">Imagen</label>
               <input type="text" name="image" id="image" class="form-control" value="{{$juego->image}}">
            </div>

            <div class="form-group">
               <label for="video">Video</label>
               <input type="text" name="video" id="video" class="form-control" value="{{$juego->video}}">
            </div>

            <div class="form-group">
               <label for="description">Descripción</label>
               <textarea name="description" id="description" class="form-control" rows="3">{{$juego->description}}</textarea>
            </div>

            <div class="form-group">
               <label for="launch">Fecha de lanzamiento</label>
               <input type="text" name="launch" id="launch" class="form-control" value="{{$juego->launch}}">
            </div>
            
            <div class="form-group">
               <label for="creator">Compañia</label>
               <input type="text" name="creator" id="creator" class="form-control" value="{{$juego->creator}}">
            </div>
            
            <div class="form-group">
               <label for="editor">Editora</label>
               <input type="text" name="editor" id="editor" class="form-control" value="{{$juego->editor}}">
            </div>

            <div class="form-group">
               <label for="key">Clave</label>
               <input type="text" name="key" id="key" class="form-control" value="{{$juego->key}}">
            </div>

            <div class="form-group text-center">
               <button type="submit" class="btn btn-warning button">
                   Modificar Juego
               </button>
            </div>

            </form>

         </div>
      </div>
   </div>
</div>

@stop