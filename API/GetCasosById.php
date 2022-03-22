<?php
include './Api.php';
include './API/Modelos/Formulario.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$api = new Api();
$casos = $api->GetCasosById($_GET['id']);

session_start();

$_SESSION['casos'] = $casos;
header("location: ../Web/FormDelete.php?id=" . $_GET['id']);
