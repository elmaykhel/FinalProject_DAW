<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="./js/index.js"></script>
    <title>Ficha Clientes</title>
</head>
<body>
    <label>Nombre: </label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label>Apellidos: </label>
    <input type="text" name="apellidos" id="apellidos">
    <input type="submit" name="searchbtn" id="boton">

    <div id="tabla"></div>
</body>
</html>