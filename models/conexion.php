<?php
    $esLocal = ($_SERVER['HTTP_HOST'] === 'localhost');

    if ($esLocal) {
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "tienda_bd";
    } else {
        $servername = "sql301.infinityfree.com";
        $username   = "if0_42108395";
        $password   = "0962910097";
        $dbname     = "if0_42108395_tienda_bd";
    }

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    else {
        echo "Conexion exitosa";
    }
?>