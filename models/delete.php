<?php
    include "conexion.php";

    $proId = $_POST["proID"];

    $sqlDelete = "DELETE FROM productos WHERE id='$proId'";

    $respuesta = $conn->query($sqlDelete);

    if ($respuesta == TRUE) {
        echo "Se eliminó el producto correctamente.";
    } else {
        echo "Error al eliminar: " . $conn->error;
    }
?>