<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido, <?= htmlspecialchars($_SESSION['usuario_nombre'] ?? 'usuario') ?></h1>
    <p>Rol: <?= htmlspecialchars($_SESSION['usuario_rol'] ?? '') ?></p>
    <a href="../index.php">Volver al inicio</a>
</body>
</html>