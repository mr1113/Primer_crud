<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <title>Detalles del contacto</title>
</head>
<body>
    <div class="jumbotron">
    <h2>Detalles del contacto</h2>
    </div>

    <div class="formulario">
  <form action="{{url('/contacto/'.$cont->id)}}" method="POST">
  {{csrf_field()}}
  {{method_field('PATCH')}} 

    <label for="nombre_apellido">Nombre</label>
    <input type="text" disabled="disabled" id="nombre_apellido" name="nombre_apellido" value="{{$cont->nombre_apellido}}">

    <label for="telefono">Telefono</label>
    <input type="number" disabled="disabled" id="telefono" name="telefono" value="{{$cont->telefono}}">

    <label for="direccion">Direccion</label>
    <input type="text" disabled="disabled" name="direccion" id="direccion" value="{{ $cont->direccion}}">

    <label for="email">E-mail</label>
    <input type="email" disabled="disabled" name="email" id="email" value="{{$cont->email}}">

    <label for="nacimimento">Cumpleaños</label>
    <input type="date" disabled="disabled" name="nacimiento" id="nacimiento" value="{{$cont->nacimiento}}"> 

    <a href="{{url('/contacto')}}" class="btn btn-danger">Volver</a>

    </form>
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
  </div>
</body>
</html>