<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado Clientes</title>
</head>
<body>
    <h1>Clientes</h1> <br>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Número de teléfono</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td> {{$cliente->id}} </td>
                <td> {{$cliente->nombre}} </td>
                <td> {{$cliente->apellido1}} </td>
                <td> {{$cliente->apellido2}} </td>
                <td> {{$cliente->telefono}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>