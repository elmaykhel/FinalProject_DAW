<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="./js/index.js"></script>
    <title>Ficha Clientes</title>
</head>
<body>
    <label class="form-label">Nombre: </label>
    <input type="text" name="nombre" id="nombre" class="form-control">
    <br>
    <label class="form-label">Apellidos: </label>
    <input type="text" name="apellidos" id="apellidos" class="form-control">
    <input type="submit" name="searchbtn" id="boton" class="btn btn-primary">

    <div id="ficha"></div>
</body>
</html>