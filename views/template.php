<html>

<head>
    <title> Cuarto SW </title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header>
        <img src="img/utabanner.jpg" wirdth="100%" height="80px">
    </header>

    <nav>
        <ul>
            <li> <a href="index.php?opcion=inicio"> Inicio </a> </li>
            <li> <a href="index.php?opcion=nosotros">Nosotros </a> </li>
            <li> <a href="index.php?opcion=servicios"> Servicios </a> </li>
            <li> <a href="index.php?opcion=contactanos"> Contactanos </a> </li>
        </ul>
    </nav>
    <article>
        <?php
            $mvc= new ControllerEnlacesPaginas();
            $mvc-> EnlacesPaginasModelo();
        ?>
    </article>

    <footer>
        Derechos reservados 4 Software
    </footer>
</body>

</html>