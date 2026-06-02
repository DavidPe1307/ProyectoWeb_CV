<?php
    include "conexion.php";
    $proId=$_GET["proID"];  //para borrar lo mas facil es hacerlo por get 

    $sqlDelete = "delete from producto where proID='$proId'";
    $respuesta = $conn->query($sqlDelete);

    if ($respuesta == TRUE){

        echo("Se borro el producto");
    } else {
        echo("no se borro el producto");
    }
    
?>