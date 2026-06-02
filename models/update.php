<?php 
include "conexion.php";
$proId=$_GET["proID"];
$proNom=$_GET["proNombre"];
$proDes=$_GET["proDescripcion"];
$proPrec=$_GET["proPrecio"];
$proStock=$_GET["proStock"];
$proImg=$_GET["proImagen"];


$sqlUpdate = "update producto set proNombre = '$proNom', proDescripcion = '$proDes', proPrecio = '$proPrec', proStock = '$proStock', proImagen = '$proImg' where proID = '$proId'";

$respuesta=$conn->query($sqlUpdate);

if ($respuesta == TRUE){
    echo "se actualizo";
} else {
    echo "no se actualizo";
}


?>