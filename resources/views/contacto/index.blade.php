<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <title>Agenda</title>
</head>
<body>
    <div class="jumbotron">
        <h2>Contactos</h2>
    </div>
    @if (session('alert'))
    <div class="alert alert-success">
      {{ session('alert') }}
    </div>

@endif
<div class="contenedor">
    <div class="formulario">
        <form action="contacto" method="GET">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="buscar" name="searchText"
                        placeholder="Buscar..." value="{{$searchText}}">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </span>
                    </div>   
                </div> 
            </div>  
        </form>

        <a href="contacto/create"><button type="submit" class="btn btn-primary">Crear</button></a>
</div>
    <table class="tabla">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>E-mail</th>
            <th>Opciones</th>
        </thead>
        <tbody>
        @foreach($Contactos as $cont)
            <tr>
                <td>{{$cont->id}}</td>
                <td>{{$cont->nombre_apellido}}</td>
                <td>{{$cont->telefono}}</td>
                <td>{{$cont->direccion}}</td>
                <td>{{$cont->email}}</td>
                <td>{{$cont->nacimiento}}</td>
                <td>
                <form action="{{url('/contacto/'.$cont->id)}}" method="POST">
                {{( csrf_field() )}}
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Emilinar</button>
                </form>
                <a href="{{ url('/contacto/'.$cont->id.'/edit') }}" type="submit" class="btn btn-warning">Editar</a>
                <a href="{{ URL::action('ContactoController@show',$cont->id) }}" type="submit" class="btn btn-primary">Detalles</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="paginado">{{$Contactos->render()}}</div>

    <style>

        .formulario{
            width: 80%;
            display: inline-block;
        }
        .contenedor{
            width: 50%;
            margin: 0 auto;
        }

        .input-group{
            width: auto;
        }

        .tabla{
            text-align: center;
            width: 80%;
            margin: 0 auto;
        }

        .paginado{
            width: 10%;
            margin: 0 auto;
            margin-top: 10px;
        }
        
        .jumbotron{
            background-color: salmon;
        }

    </style>

</body>
</html>