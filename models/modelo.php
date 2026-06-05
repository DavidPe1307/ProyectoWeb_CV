<?php 
class ModeloEnlacesPaginas {
    public static function EnlacesPaginasModelo($module) {

        $paginasPublicas = ["inicio", "nosotros", "contactanos", "logout"];
        $paginasCliente  = ["servicios"];
        $paginasAdmin    = ["producto"];

        if (in_array($module, $paginasPublicas)) {
            $pagina = "views/" . $module . ".php";

        } elseif (in_array($module, $paginasCliente)) {
            if (isset($_SESSION["usuario_rol"]) && $_SESSION["usuario_rol"] === "cliente") {
                $pagina = "views/" . $module . ".php";
            } else {
                $pagina = "views/nosotros.php"; // redirige al login
            }

        } elseif (in_array($module, $paginasAdmin)) {
            if (isset($_SESSION["usuario_rol"]) && $_SESSION["usuario_rol"] === "admin") {
                $pagina = "views/" . $module . ".php";
            } else {
                $pagina = "views/nosotros.php";
            }

        } else {
            $pagina = "views/inicio.php";
        }

        return $pagina;
    }
}
?>