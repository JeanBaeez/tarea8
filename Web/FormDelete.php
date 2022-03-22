<?php

include '../API/Modelos/Formulario.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$formulario = new Formulario();
$formulario->Id = $_SESSION['casos']->Id;
$formulario->Fecha = $_SESSION['casos']->Fecha;
$formulario->Hora = $_SESSION['casos']->Hora;
$formulario->Ciudad = $_SESSION['casos']->Ciudad;
$formulario->Latitud = $_SESSION['casos']->Latitud;
$formulario->Longitud = $_SESSION['casos']->Longitud;
$formulario->TipoArma = $_SESSION['casos']->TipoArma;
$formulario->Muertos = $_SESSION['casos']->Muertos;
$formulario->Heridos = $_SESSION['casos']->Heridos;
$formulario->TotalDanos = $_SESSION['casos']->TotalDanos;
$formulario->Autor = $_SESSION['casos']->AutorAtaque;


#$casos =  new Formulario(json_decode($_SESSION['casos']));



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Caso</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
</head>
<?php require('./NavComponent.php'); ?>

<body>
    <div>
        <?php require('./BackComponent.php') ?>
    </div>
    <div class="container  ">

        <form class='form-group col-auto' method='DELETE'>
            <label class="form-label" for='fecha'>Fecha</label>
            <input type='text' class="form-control form-control-sm" name='fecha' id='fecha' value='<?php echo $formulario->Fecha ?>' readonly />
            <label for='hora'>Hora</label>
            <input type='text' class="form-control" name='hora' id='hora' value='<?php echo $formulario->Hora ?>' readonly>
            <label for='ciudad'>Ciudad</label>
            <input type='text' class="form-control" name='ciudad' id='ciudad' value='<?php echo $formulario->Ciudad ?>' readonly>
            <label for='latitud'>Latitud</label>
            <input type='text' class="form-control" name='latitud' id='latitud' value='<?php echo $formulario->Latitud ?>' readonly>
            <label for='longitud'>Longitud</label>
            <input type='text' class="form-control" name='longitud' id='longitud' value='<?php echo $formulario->Longitud ?>' readonly>
            <label for='tipoArma'>Tipo de Arma</label>
            <input type='text' class="form-control" name='tipoArma' id='tipoArma' value='<?php echo $formulario->TipoArma ?>' readonly>
            <label for='muertes'>Muertos</label>
            <input type='text' class="form-control" name='muertes' id='muertes' value='<?php echo $formulario->Muertos ?>' readonly>
            <label for='heridos'>Heridos</label>
            <input type='text' class="form-control" name='heridos' id='heridos' value='<?php echo $formulario->Heridos ?>' readonly>
            <label for='totalDanos'>Total Daños</label>
            <input type='text' class="form-control" name='totalDanos' id='totalDanos' value='<?php echo $formulario->TotalDanos ?>' readonly>
            <label for='autor'>Autor</label>
            <input type='text' class="form-control" name='autor' id='autor' value='<?php echo $formulario->Autor ?>' readonly>

            <hr>
            <br>
            <input type='submit' class="btn btn-danger" value='Eliminar'>
        </form>

    </div>

</body>

</html>