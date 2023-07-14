<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/method.css">
    <link rel="stylesheet" href="css/calculadora.css">
    <title>Mayor o menor de edad</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <a href="index.html#section-respuestas">
        <img class="home" src="img/hogar.png" alt="">
    </a>
    <div class="main-frame-cal">
        <!-- Inicio del formulario -->
        <form action="" method="GET">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Digite su Nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Digite su Apellido">
            </div>
            <div class="form-group">
                <label for="cedula">Cédula</label>
                <input type="text" name="cc" class="form-control" id="cedula" placeholder="Digite su Cédula">
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Enviar</button>
        </form>
        <!-- Fin del formulario -->

        <!-- Inicio del código PHP -->
        <?php
        if (isset($_GET['verificar'])) {
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $cedula = $_GET['cc'];

            // Mostrar la información ingresada
            echo "<h1>Información:</h1>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Apellido: $apellido</p>";
            echo "<p>Cédula: $cedula</p>";
        }
        ?>
        <!-- Fin del código PHP -->
    </div>
</body>
</html>
