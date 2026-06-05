<?php
require_once __DIR__ . '/../models/usuario_model.php';

$errorRegistro  = "";
$exitoRegistro  = "";
$errorLogin     = "";

// ── REGISTRO ──────────────────────────────────────────────
if (isset($_POST["Registrar"])) {
    $cedula     = trim($_POST["Cedula"]);
    $nombre     = trim($_POST["Nombre"]);
    $apellido   = trim($_POST["Apellido"]);
    $correo     = trim($_POST["Correo"]);
    $telefono   = trim($_POST["Telefono"]);
    $direccion  = trim($_POST["Direccion"]);
    $contrasena = $_POST["Contrasena"];
    $confirmar  = $_POST["ConfirmarContrasena"];

    if ($contrasena !== $confirmar) {
        $errorRegistro = "Las contraseñas no coinciden.";
    } else {
        $ok = UsuarioModel::registrar($cedula, $nombre, $apellido, $correo, $telefono, $direccion, $contrasena);
        if ($ok) {
            $exitoRegistro = "Registro exitoso. Ya puedes iniciar sesión.";
        } else {
            $errorRegistro = "Error al registrar. La cédula o correo ya pueden estar en uso.";
        }
    }
}

// ── LOGIN ─────────────────────────────────────────────────
if (isset($_POST["IniciarSesion"])) {
    $correo     = trim($_POST["Correo"]);
    $contrasena = $_POST["Contrasena"];

    $usuario = UsuarioModel::login($correo, $contrasena);

    if ($usuario) {
        $_SESSION["usuario_id"]     = $usuario["usuId"];
        $_SESSION["usuario_nombre"] = $usuario["usuNombre"];
        $_SESSION["usuario_rol"]    = $usuario["usuRol"];

        if ($usuario["usuRol"] === "admin") {
            header("Location: /ProyectoWeb_CV/index.php?opcion=producto");
        } else {
            header("Location: /ProyectoWeb_CV/views/dashboard.php");
        }
        exit();
    } else {
        $errorLogin = "Correo o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nosotros</title>
    <link rel="stylesheet" href="css/estilologin.css">
</head>
<body>

<!-- ── FORMULARIO REGISTRO ── -->
<div class="container" id="registrarse">
    <h1>Registrar Sesión</h1>
    <p>Bienvenido, ingrese sus datos para un registro previo.</p>

    <?php if ($errorRegistro): ?>
        <p class="mensaje error"><?= htmlspecialchars($errorRegistro) ?></p>
    <?php endif; ?>
    <?php if ($exitoRegistro): ?>
        <p class="mensaje exito"><?= htmlspecialchars($exitoRegistro) ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="registro_datos">
            <input type="text" name="Nombre" id="usuNombre" placeholder="Ingrese su nombre" required>
            <label for="usuNombre">Nombre</label>
        </div>
        <div class="registro_datos">
            <input type="text" name="Apellido" id="usuApellido" placeholder="Ingrese su apellido" required>
            <label for="usuApellido">Apellido</label>
        </div>
        <div class="registro_datos">
            <input type="text" name="Cedula" id="usuCedula" placeholder="Ingrese su cédula" required>
            <label for="usuCedula">Cédula</label>
        </div>
        <div class="registro_datos">
            <input type="email" name="Correo" id="usuCorreoReg" placeholder="Ingrese su correo" required>
            <label for="usuCorreoReg">Correo</label>
        </div>
        <div class="registro_datos">
            <input type="text" name="Telefono" id="usuTelefono" placeholder="Ingrese su teléfono" required>
            <label for="usuTelefono">Teléfono</label>
        </div>
        <div class="registro_datos">
            <input type="text" name="Direccion" id="usuDireccion" placeholder="Ingrese su dirección" required>
            <label for="usuDireccion">Dirección</label>
        </div>
        <div class="registro_datos">
            <input type="password" name="Contrasena" id="usuContrasena" placeholder="Ingrese su contraseña" required>
            <label for="usuContrasena">Contraseña</label>
        </div>
        <div class="registro_datos">
            <input type="password" name="ConfirmarContrasena" id="usuConfirmarContrasena" placeholder="Confirme su contraseña" required>
            <label for="usuConfirmarContrasena">Confirmar Contraseña</label>
        </div>
        <input type="submit" class="btn" name="Registrar" value="Registrar">
    </form>

    <div class="registrarse">
        <p>¿Ya tienes una cuenta?</p>
        <button id="btnIniciarSesion">Iniciar sesión</button>
    </div>
</div>

<!-- ── FORMULARIO LOGIN ── -->
<div class="container" id="iniciarSesion">
    <h1>Iniciar sesión</h1>
    <p>Bienvenido, ingrese sus datos para iniciar sesión.</p>

    <?php if ($errorLogin): ?>
        <p class="mensaje error"><?= htmlspecialchars($errorLogin) ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="iniciar_datos">
            <input type="email" name="Correo" id="usuCorreoLogin" placeholder="Ingrese su correo" required>
            <label for="usuCorreoLogin">Correo</label>
        </div>
        <div class="iniciar_datos">
            <input type="password" name="Contrasena" id="usuContrasenaLogin" placeholder="Ingrese su contraseña" required>
            <label for="usuContrasenaLogin">Contraseña</label>
        </div>
        <input type="submit" class="btn" name="IniciarSesion" value="Iniciar sesión">
    </form>

    <div class="registrarse">
        <p>¿No tienes cuenta?</p>
        <button id="btnRegistrarSesion">Registrarte</button>
    </div>
</div>

<script>
    // Alternar entre los dos formularios
    const divRegistro  = document.getElementById('registrarse');
    const divLogin     = document.getElementById('iniciarSesion');

    // Mostrar login por defecto si hay error de login
    <?php if ($errorLogin): ?>
        divRegistro.style.display = 'none';
        divLogin.style.display    = 'block';
    <?php else: ?>
        divLogin.style.display    = 'none';
    <?php endif; ?>

    document.getElementById('btnIniciarSesion').addEventListener('click', () => {
        divRegistro.style.display = 'none';
        divLogin.style.display    = 'block';
    });

    document.getElementById('btnRegistrarSesion').addEventListener('click', () => {
        divLogin.style.display    = 'none';
        divRegistro.style.display = 'block';
    });
</script>

</body>
</html>