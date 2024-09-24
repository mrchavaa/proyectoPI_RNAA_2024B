<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alta Clientes</title>
</head>
<body>
    <h1>Alta de cliente</h1>
    
    <form action="/guardar-clientes" method="post">
        @csrf <!-- Crear Token CSRF para evitar error 419: Page Expired-->

        <label for="nombre">Nombre: </label> <br>
        <input type="text" name="nombre" id="nombre" placeholder="Alexander"> <br><br>

        <label for="apellido1">Apellido Paterno: </label> <br>
        <input type="text" name="apellido1" id="apellido1" placeholder="Ramírez"> <br><br>

        <label for="apellido2">Apellido Materno: </label> <br>
        <input type="text" name="apellido2" id="apellido2" placeholder="Navarro"> <br><br>

        <label for="telefono">Número de teléfono: </label> <br>
        <input type="tel" name="telefono" id="telefono" placeholder="+52 3312345678"> <br><br>

        <button type="submit" id="btnEnviarFormulario">Enviar</button>
    </form>
    
</body>
</html>