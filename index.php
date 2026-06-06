
<?php
session_start();
require_once "models/conexion.php";
require_once "models/modelo.php";
require_once "models/usuario_model.php";
require_once "controllers/controller.php";

$mvc = new ControllerEnlacesPaginas();
$mvc->platilla();
?>
