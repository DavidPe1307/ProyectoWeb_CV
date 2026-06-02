<?php 
    class ModeloEnlacesPaginas{
        public static function EnlacesPaginasModelo($module){

            if ($module == "inicio" 
            || $module == "servicios" 
            || $module == "contactanos"
            || $module == "nosotros") {
                $pagina = "views/" .$module. ".php";
            }
            else {
                $pagina = "views/inicio.php";
            }
            return $pagina;
        }
    }


?>