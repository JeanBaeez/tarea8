<!DOCTYPE html>
<html lang="en">
<? include '/Backend/Controllers/Registrar.php';
define('ENVIRONMENT', 'development'); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Casos Ucrania</title>
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
        <?php
        require('./BackComponent.php');

        ?>
    </div>
    <div class="">
        <section class="container">
            <h2>Registro de casos </h2>
            <hr>
            <form method="POST" action="../API/Registrar.php" class=" form">
                <div class="form-group">
                    <input type="date" name="fecha" placeholder="Fecha" class="form-control formImput">
                    <input type="time" name="hora" placeholder="Hora" class="form-control formImput">
                    <input type="text" name="ciudad" placeholder="Ciudad" class="form-control formImput">
                    <input type="number" name="latitud" placeholder="Latitud" class="form-control formImput">
                    <input type="number" name="longitud" placeholder="Logitud" class="form-control formImput">
                    <input type="text" name="tipoArma" placeholder="Tipo de Arma" class="form-control formImput">
                    <input type="number" name="muertos" placeholder="# Muertos" class="form-control formImput">
                    <input type="number" name="heridos" placeholder="# Heridos" class="form-control formImput">
                    <input type="text" name="totalDanos" placeholder="Total de Daños" class="form-control formImput">
                    <input type="text" name="autor" placeholder="Autor" class="form-control formImput">
                    <hr>
                    <input type="submit" value="Registrar" name="registrar" onsubmit="sle();" class="btn btn-primary" class="form-control formImput">
                    <input type="reset" value="Limpiar" class="btn btn-info">
                </div>

            </form>
        </section>
        <script>
            function sle() {
                alert("Registro Exitoso");
            }
        </script>
    </div>
</body>


</html>