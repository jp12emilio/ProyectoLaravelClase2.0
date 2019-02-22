@extends('layouts.master')
@section('content')
<body>
	<div>
   		<div class="offset-md-3 col-md-6">
      		<div class="card">
         		<div class="card-header text-center text-warning bg-dark">
            		Alta Usuario
         		</div>
         		<div class="card-body">

            		<form class="col-md-12" action="#" method="POST">

            			{{ csrf_field() }}


                     <div class="form-group text-warning">
               				<label for="name">Nombre</label>
               				<input type="text" name="name" id="name" class="form-control">
            			</div>

            			<div class="form-group text-warning">
               				<label for="price">Apellido</label>
               				<input type="text" name="subname" id="subname" class="form-control">
            			</div>

            			<div class="form-group text-warning">
               				<label for="category">Correo</label>
               				<input type="text" name="email" id="email" class="form-control">
            			</div>
                     <div class="form-group text-warning">
                           <label for="name">Contraseña</label>
                           <input type="password" name="password" id="password" class="form-control">
                     </div>
            			<div class="form-group text-warning">
               				<label for="image">Dirección</label>
               				<input type="text" name="address" id="address" class="form-control">
            			</div>
                     <div class="form-group text-warning">
                           <label for="name">Usuario</label>
                           <input type="text" name="user" id="user" class="form-control">
                     </div>
                      

            			<div class="form-group text-center">
               				<button type="submit" class="btn btn-warning" style="padding:8px 100px;margin-top:25px;">
                   				Crear usuario
               				</button>
            			</div>
            		</form>

         		</div>
      		</div>
   		</div>
	</div>
</body>
@endsection