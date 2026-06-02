<?php

    class ControllerEnlacesPaginas{
        
        public function platilla(){
            include "views/template.php";
        }

        public function EnlacesPaginasModelo(){
            if(isset($_GET["opcion"])){
                $enlacesController= $_GET["opcion"];
            } else {
                $enlacesController = "inicio";
            }
            $respuesta = ModeloEnlacesPaginas::EnlacesPaginasModelo($enlacesController);
            include $respuesta;
        }
    }
?> 