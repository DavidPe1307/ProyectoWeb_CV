<?php
    include "conexion.php";

    $proNombre      = $_POST["proNombre"];
    $proDescripcion = $_POST["proDescripcion"];
    $proPrecio      = $_POST["proPrecio"];
    $proImagen      = $_POST["proImagen"];

    $sqlInsert = "INSERT INTO productos (nombre, descripcion, precio, imagen) 
                  VALUES ('$proNombre', '$proDescripcion', '$proPrecio', '$proImagen')";

    $respuesta = $conn->query($sqlInsert);

    if ($respuesta == TRUE) {
        echo "Se insertó el producto correctamente.";
    } else {
        echo "Error al insertar: " . $conn->error;
    }
?>