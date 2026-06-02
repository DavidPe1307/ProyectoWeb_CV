<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="tienda_bd";

    $conn = mysqli_connect($servername, $username, $password, $dbname); //funciona al igual que la de abajo xd

    $mysql=new mysqli($servername, $username, $password, $dbname);


    if (!$conn){
    //        echo ("Error". mysqli_connect_error()); //si no se conecta a la base de datos, muestra el error segun el metodo connect_error
    
        die ("Error". mysqli_connect_error()); //si no se conecta a la base de datos, muestra el error segun el metodo connect_error
    } else {

        echo ("conexion exitosa");
    }
?>