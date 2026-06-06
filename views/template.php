<?php if (!isset($_SESSION)) session_start(); ?>
<html>
<head>
    <title>Cuarto SW</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <img src="img/utabanner.jpg" width="100%" height="80px">
    </header>

    <nav>
        <ul>
            <li><a href="index.php?opcion=inicio">Inicio</a></li>
            <li><a href="index.php?opcion=nosotros">Nosotros</a></li>
            <li><a href="index.php?opcion=contactanos">Contáctanos</a></li>

            <?php if (isset($_SESSION["usuario_rol"])): ?>

                <?php if ($_SESSION["usuario_rol"] === "cliente"): ?>
                    <li><a href="index.php?opcion=servicios">Servicios</a></li>

                <?php elseif ($_SESSION["usuario_rol"] === "admin"): ?>
                    <li><a href="index.php?opcion=producto">Productos</a></li>
                <?php endif; ?>

                <li><a href="index.php?opcion=logout">
                    Cerrar sesión (<?= htmlspecialchars($_SESSION["usuario_nombre"]) ?>)
                </a></li>

            <?php endif; ?>
        </ul>
    </nav>

    <article>
        <?php
            $mvc = new ControllerEnlacesPaginas();
            $mvc->EnlacesPaginasModelo();
        ?>
    </article>

    <footer>
        Derechos reservados 4 Software
    </footer>
</body>
</html>