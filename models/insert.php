<?php
    include "conexion.php";

    $proNombre      = $_POST["proNombre"];
    $proDescripcion = $_POST["proDescripcion"];
    $proPrecio      = $_POST["proPrecio"];
    $proStock       = $_POST["proStock"];
    $proImagen      = $_POST["proImagen"];

    $sqlInsert = "INSERT INTO productos (proNombre, proDescripcion, proPrecio, proStock, proImagen)
                  VALUES ('$proNombre', '$proDescripcion', '$proPrecio', '$proStock', '$proImagen')";

    $respuesta = $conn->query($sqlInsert);

    if ($respuesta == TRUE) {
        echo "Se insertó el producto correctamente.";
    } else {
        echo "Error al insertar: " . $conn->error;
    }
?>