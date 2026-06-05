<html>
    <head>
        <title>Nosotros</title>
        <link rel="stylesheet" href="css/estilologin.css">
    </head>
    <body>
        <div class="container" id="registrarse">
            <h1> Registrar Sesión </h1>
             <p>Bienvenido, ingrese sus datos para un registro previo.</p>
              <form method="POST" action="">
                <div class= "registro_datos">
                    <input type="text" name="Nombre" id="usuNombre" placeholder= "Ingrese su nombre" required>
                    <label for="usuNombre">Nombre</label>
                </div>
                <div class="registro_datos">
                    <input type="text" name="Apellido" id="usuApellido" placeholder="Ingrese su apellido" required> 
                    <label for="usuApellido" >Apellido</label>
                </div>
                <div class="registro_datos">
                    <input type="text" name="Cedula" id="usuCedula" placeholder="Ingrese su cedula" required> 
                    <label for="usuCedula" >Cedula</label>
                </div>
                <div class="registro_datos">
                    <input type="text" name="Correo" id="usuCorreo" placeholder="Ingrese su correo" required> 
                    <label for="usuCorreo" >Correo</label>
                </div>
                <div class="registro_datos">
                    <input type="text" name="Telefono" id="usuTelefono" placeholder="Ingrese su teléfono" required> 
                    <label for="usuTelefono" >Teléfono</label>
                </div>
                <div class="registro_datos">
                    <input type="text" name="Direccion" id="usuDireccion" placeholder="Ingrese su direccion" required> 
                    <label for="usuDireccion" >Direccion</label>
                </div>
                <div class="registro_datos">
                    <input type="password" name="Contraseña" id="usuContraseña" placeholder="Ingrese su contraseña" required> 
                    <label for="usuContraseña" >Contraseña</label>
                </div>
                <div class="registro_datos">
                    <input type="password" name="ConfirmarContraseña" id="usuConfirmarContraseña" placeholder="Confirme su contraseña" required> 
                    <label for="usuConfirmarContraseña" >Confirmar Contraseña</label>
                </div>
                <input type="submit" class="btn" name="Registrar" value="Registrar">
            </form>
            <div class="registrarse">
                <p>¿Ya tienes una cuenta?</p>
                <button id="btnIniciarSesion">Iniciar sesión</button>
            </div>  
        </div>
        <div class="container" id="iniciarSesion">
            <h1> Iniciar sesión </h1>
             <p>Bienvenido, ingrese sus datos para iniciar sesión.</p>
              <form method="POST" action="">
                
                <div class="iniciar_datos">
                    <input type="text" name="Correo" id="usuCorreo" placeholder="Ingrese su correo" required> 
                    <label for="usuCorreo" >Correo</label>
                
                <div class="iniciar_datos">
                    <input type="password" name="Contraseña" id="usuContraseña" placeholder="Ingrese su contraseña" required> 
                    <label for="usuContraseña" >Contraseña</label>
                </div>
               
                <input type="submit" class="btn" name="IniciarSesion" value="Iniciar sesión">
            </form>
            <div class="registrarse">
                <p>¿No tienes cuenta?</p>
                <button id="btnRegistrarSesion">Registrarte</button>
            </div>  
        </div>

    </body>

    
</html>
<?php
if (isset($_POST["Registrar"])) {
    $cedula      = $_POST["Cedula"];
    $nombre      = $_POST["Nombre"];
    $apellido    = $_POST["Apellido"];
    $correo      = $_POST["Correo"];
    $telefono    = $_POST["Telefono"];
    $direccion   = $_POST["Direccion"];
    $contrasena  = $_POST["Contrasena"];
    $confirmar   = $_POST["ConfirmarContrasena"];

    if ($contrasena !== $confirmar) {
        $errorRegistro = "Las contraseñas no coinciden.";
    } else {
        $resultado = UsuarioModel::registrar($cedula, $nombre, $apellido, $correo, $telefono, $direccion, $contrasena);
        if ($resultado) {
            $exitoRegistro = "Registro exitoso. Ya puedes iniciar sesión.";
        } else {
            $errorRegistro = "Error al registrar. El correo ya puede estar en uso.";
        }
    }
}
if ($usuario) {
    $_SESSION["usuario_id"]     = $usuario["usuId"];
    $_SESSION["usuario_nombre"] = $usuario["usuNombre"];
    $_SESSION["usuario_rol"]    = $usuario["usuRol"];

    if ($usuario["usuRol"] == "admin") {
        header("Location: index.php?opcion=producto");
    } else {
        header("Location: index.php?opcion=servicios");
    }
    exit();
}
?>