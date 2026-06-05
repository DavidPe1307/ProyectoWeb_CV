<?php
    include "conexion.php";

    $proId          = $_POST["proID"];
    $proNombre      = $_POST["proNombre"];
    $proDescripcion = $_POST["proDescripcion"];
    $proPrecio      = $_POST["proPrecio"];
    $proImagen      = $_POST["proImagen"];

    $sqlUpdate = "UPDATE productos 
                  SET nombre='$proNombre', descripcion='$proDescripcion', 
                      precio='$proPrecio', imagen='$proImagen' 
                  WHERE id='$proId'";

    $respuesta = $conn->query($sqlUpdate);

    if ($respuesta == TRUE) {
        echo "Se actualizó el producto correctamente.";
    } else {
        echo "Error al actualizar: " . $conn->error;
    }
?>