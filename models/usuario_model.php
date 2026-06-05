<?php
    include_once "conexion.php";

    class UsuarioModel {

        public static function registrar($cedula, $nombre, $apellido, $correo, $telefono, $direccion, $contrasena) {
            global $conn;
            $sql = "INSERT INTO usuarios (usuCedula, usuNombre, usuApellido, usuCorreo, usuTelefono, usuDireccion, usuContrasena, usuRol)
                    VALUES ('$cedula', '$nombre', '$apellido', '$correo', '$telefono', '$direccion', '$contrasena', 'cliente')";
            return $conn->query($sql);
        }

        public static function login($correo, $contrasena) {
            global $conn;
            $sql = "SELECT * FROM usuarios WHERE usuCorreo='$correo' AND usuContrasena='$contrasena'";
            $resultado = $conn->query($sql);
            if ($resultado->num_rows > 0) {
                return $resultado->fetch_assoc();
            }
            return null;
        }
    }
?>