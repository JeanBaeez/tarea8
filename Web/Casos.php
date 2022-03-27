<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casos</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <?php require('./NavComponent.php'); ?>

<body>
    <div>
        <?php require('./BackComponent.php') ?>
    </div>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
    <div class="container">

        <br>
        <br>
        <br>
        <table id="table" class="table hover cell-border">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Ciudad</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Tipo Arma</th>
                    <th>Muertes</th>
                    <th>Heridos</th>
                    <th>Total Daños</th>
                    <th>Autor de Ataque</th>

                </tr>
            </thead>
        </table>
    </div>

    <script>
        $(document).ready(function() {

            $.ajax({
                url: '/ITLA/ProgramacionWeb/tarea8/API/GetCasos.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#table').DataTable({
                        data: data,
                        columns: [{
                                data: 'Fecha'
                            }, {
                                data: 'Hora'
                            }, {
                                data: 'Ciudad'
                            }, {
                                data: 'Latitud'
                            }, {
                                data: 'Longitud'
                            }, {
                                data: 'TipoArma'
                            }, {
                                data: 'Muertes'
                            }, {
                                data: 'Heridos'
                            },
                            {
                                data: 'TotalDanos'
                            },
                            {
                                data: 'AutorAtaque'
                            }
                        ],
                        header: true,
                    });
                }
            });
        });
    </script>
</body>

</html>