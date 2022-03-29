<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require './Api.php';

if (isset($_POST)) {

    $db = new Api();




    $db->registrarCasos($_POST);

    
    header('Location: /ITLA/ProgramacionWeb/tarea8/Web/registro.php');
}
