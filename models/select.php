<?php
    
    include "conexion.php";
    $sqlSelect = "SELECT * FROM productos";
    $respuesta = $conn->query($sqlSelect);
    $resultado=array();
    if($respuesta->num_rows>0){
        while($fila=$respuesta->fetch_array()){ //permite coger fila por fila o tambien con fetch_assoc() que devuelve un array asociativo, o con fetch_row() que devuelve un array indexado
            array_push($resultado,$fila);
        }
    } else {
            $resultado = "no hay productos";
    }
    print_r($resultado);

?>