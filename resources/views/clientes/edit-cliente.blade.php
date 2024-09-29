<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Cliente</title>

    <style>
        .error{
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Actualizar cliente</h1>
    
    <form action="{{ route('cliente.update', $cliente) }}" method="post">
        @csrf <!-- Crear Token CSRF para evitar error 419: Page Expired-->
        @method('PATCH')

        <!--Nombre -->
        <label for="nombre">Nombre: </label> <br>
        <input type="text" name="nombre" id="nombre" placeholder="Alexander" value="{{ old('nombre') ?? $cliente->nombre}}"> <br>
        @error('nombre')
            <span class="error"> {{$message}} </span>
        @enderror
        <br><br>

        <label for="apellido1">Apellido Paterno: </label> <br>
        <input type="text" name="apellido1" id="apellido1" placeholder="Ramírez" value="{{ old('apellido1') ?? $cliente->apellido1}}"" <br> <br>
        @error('apellido1')
            <span class="error"> {{$message}} </span>
        @enderror
        <br><br>

        <label for="apellido2">Apellido Materno: </label> <br>
        <input type="text" name="apellido2" id="apellido2" placeholder="Navarro" value="{{ old('apellido2') ?? $cliente->apellido2}}"" <br> <br>
        @error('apellido2')
            <span class="error"> {{$message}} </span>
        @enderror
        <br><br>

        <label for="telefono">Número de teléfono: </label> <br>
        <input type="tel" name="telefono" id="telefono" placeholder="+52 3312345678" value="{{ old('telefono') ?? $cliente->telefono}}"" <br> <br>
        @error('telefono')
            <span class="error"> {{$message}} </span>
        @enderror
        <br><br>

        <label for="correo">Correo electrónico: </label> <br>
        <input type="email" name="correo" id="correo" placeholder="correo@example.com" value="{{ old('correo') ?? $cliente->correo}}"" <br> <br>
        @error('correo')
            <span class="error"> {{$message}} </span>
        @enderror
        <br><br>

        <button type="submit" id="btnEditarCliente">Actualizar</button>
    </form>
    
</body>
</html>