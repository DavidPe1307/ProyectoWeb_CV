<?php
    include "conexion.php";
    $proID=$_GET["proID"];
    $proNombre=$_GET["proNombre"];
    $proDescripcion=$_GET["proDescripcion"];
    $proPrecio=$_GET["proPrecio"];
    $proStock=$_GET["proStock"];
    $proImagen=$_GET["proImagen"];


    $sqlInsert= "insert into productos values ('$proID','$proNombre','$proDescripcion', '$proPrecio', '$proStock', '$proImagen')";

    $respuesta=$conn->query($sqlInsert);

    if ($respuesta == TRUE){
        echo ("Se inserto el producto");
    } else {
        echo ("No se inserto el producto");
    }
?>