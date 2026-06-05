<?php
    include "conexion.php";

    $proId = $_POST["proId"];

    $sqlDelete = "DELETE FROM productos WHERE proId='$proId'";

    $respuesta = $conn->query($sqlDelete);

    if ($respuesta == TRUE) {
        echo "Se eliminó el producto correctamente.";
    } else {
        echo "Error al eliminar: " . $conn->error;
    }
?>