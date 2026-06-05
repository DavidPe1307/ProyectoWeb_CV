<?php
    include "conexion.php";

    $proId          = $_POST["proId"];
    $proNombre      = $_POST["proNombre"];
    $proDescripcion = $_POST["proDescripcion"];
    $proPrecio      = $_POST["proPrecio"];
    $proStock       = $_POST["proStock"];
    $proImagen      = $_POST["proImagen"];

    $sqlUpdate = "UPDATE productos 
                  SET proNombre='$proNombre', proDescripcion='$proDescripcion',
                      proPrecio='$proPrecio', proStock='$proStock', proImagen='$proImagen'
                  WHERE proId='$proId'";

    $respuesta = $conn->query($sqlUpdate);

    if ($respuesta == TRUE) {
        echo "Se actualizó el producto correctamente.";
    } else {
        echo "Error al actualizar: " . $conn->error;
    }
?>