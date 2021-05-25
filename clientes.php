<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/includes.inc") ?>
    <script src="./js/index.js"></script>
    <link rel="stylesheet" href="./css/clientes.css">
    <title>Ficha Clientes</title>
</head>
<body>
    <div class="formu">
        <label class="form-label">Nombre: </label>
        <input type="text" name="nombre" id="nombre" class="form-control main">
        <label class="form-label">Apellidos: </label>
        <input type="text" name="apellidos" id="apellidos" class="form-control main">
        <button class="btn btn-primary bi bi-search" id="boton"></button>
        <button class="btn btn-primary" id="cliente">Añadir Cliente</button>
    </div>
    <br>
    <div id="fichaModal"></div>
    <div id="ficha"></div>
</body>
</html>