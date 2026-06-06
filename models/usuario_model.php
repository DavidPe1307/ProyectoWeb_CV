<?php
require_once __DIR__ . '/conexion.php';

function getConn() {
    $esLocal = ($_SERVER['HTTP_HOST'] === 'localhost');
    if ($esLocal) {
        return mysqli_connect("localhost", "root", "", "tienda_bd");
    } else {
        return mysqli_connect("sql301.infinityfree.com", "if0_42108395", "0962910097", "if0_42108395_tienda_bd");
    }
}

class UsuarioModel {

    public static function registrar($cedula, $nombre, $apellido, $correo, $telefono, $direccion, $contrasena) {
        $conn = getConn();
        $stmt = mysqli_prepare($conn,
            "INSERT INTO usuarios (usuCedula, usuNombre, usuApellido, usuCorreo, usuTelefono, usuDireccion, usuContrasena, usuRol)
             VALUES (?, ?, ?, ?, ?, ?, ?, 'cliente')"
        );
        mysqli_stmt_bind_param($stmt, "sssssss",
            $cedula, $nombre, $apellido, $correo, $telefono, $direccion, $contrasena
        );
        $ok = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $ok;
    }

    public static function login($correo, $contrasena) {
        $conn = getConn();
        $stmt = mysqli_prepare($conn,
            "SELECT usuId, usuNombre, usuRol FROM usuarios WHERE usuCorreo = ? AND usuContrasena = ? LIMIT 1"
        );
        mysqli_stmt_bind_param($stmt, "ss", $correo, $contrasena);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        $usuario = mysqli_fetch_assoc($resultado);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $usuario;
    }
}
?>