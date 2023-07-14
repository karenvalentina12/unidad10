<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/edad_exacta.css">
    <title>edad exacta</title>
</head>
<body>
    <a href="index.html#section-respuestas">
        <img class="home" src="img/hogar.png" alt="">
    </a>
    
    <div class="main-frame-cal">
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Seleccione su fecha de nacimiento:</label>
            <input type="date" name="f_n" class="form-control" id="exampleFormControlInput1">
        </div>
        
        <button type="submit" name="verificar" class="btn btn-outline-info">Enviar</button>
    </form>

    <?php

    if (isset($_POST['verificar'])) {
        $f_n = new DateTime($_POST['f_n']);
       
        $date2 = new DateTime(date("Y-m-d"));

        $diff = $f_n->diff($date2);

        $edad_actual = $diff->y;
        $edad_meses = $diff->m;
        $edad_dias = $diff->d;

        if ($edad_actual < 18) {
            echo "No es mayor de edad ya que tiene $edad_actual años";
        } else {
            echo "Usted es mayor de edad ya que tiene $edad_actual años";
        }

        echo "<br> meses: $edad_meses <br> dias: $edad_dias";
    }

    ?>

    </div>
</body>
</html>
