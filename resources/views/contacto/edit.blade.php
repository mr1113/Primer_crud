<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <title>Editar contacto</title>
</head>
<body>
    <div class="jumbotron">
    <h2>Editar contacto</h2>
    </div>

@if (session('mensaje'))
    <div class="alert alert-success">
      {{ session('mensaje') }}
    </div>

@endif

    <div class="formulario">
  <form action="{{url('/contacto/'.$cont->id)}}" method="POST">
  {{csrf_field()}}
  {{method_field('PATCH')}} 

    <label for="nombre_apellido">Nombre</label>
    <input type="text" id="nombre_apellido" name="nombre_apellido" value="{{$cont->nombre_apellido}}">

    <label for="telefono">Telefono</label>
    <input type="number" id="telefono" name="telefono" value="{{$cont->telefono}}">

    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion" value="{{ $cont->direccion}}">

    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" value="{{$cont->email}}">

    <label for="nacimimento">Cumpleaños</label>
    <input type="date" name="nacimiento" id="nacimiento" value="{{$cont->nacimiento}}"> 

    <input type="submit"id="guardar" value="Guardar">
    <a href="{{url('/contacto')}}" class="btn btn-danger">Cancelar</a>

    </form>
  </div>
  <style>

        .jumbotron{
            background-color: salmon;
        }

        form{
	width:300px;
	padding:30px;
	border-radius:10px;
	margin:auto;
	background-color:slateblue;
    margin-bottom: 30px;
}

form label{
	width:100px;
	font-weight:bold;
}

form input[type="submit"]{
	width:100%;
	padding:8px 16px;
	margin-top:20px;
	border:1px solid #000;
	border-radius:5px;
	display:block;
	color:#fff;
	background-color:#000;
} 

a{
	width:100%;
	padding:8px 16px;
	margin-top:20px;
	border:1px solid #000;
	border-radius:5px;
	display:block;
	color:#fff;
	background-color:#000;
  text-align: center;
} 

form input[type="submit"]:hover{
	cursor:pointer;
}
  </style>
</body>
</html>