<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle del cliente</title>
</head>
<body>
    <h1>Detalles del cliente</h1>

    <ul>
        <li> <strong> Nombre: </strong>{{$cliente->nombre}} {{$cliente->apellido1}} {{$cliente->apellido2}}</li>
        <li> <strong> Teléfono: </strong>{{$cliente->telefono}}</li>
        <li> <strong> Teléfono: </strong>{{$cliente->correo}}</li>
    </ul>

    <a href="{{ route('cliente.edit', $cliente) }}"> Editar </a>

    <form action="{{ route('cliente.destroy', $cliente) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>
