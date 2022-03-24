<?php


$conexion = mysqli_connect("localhost", "root", "", "login_register_db");

if($conexion ){
    echo "conectado exitosamente a la DB";
} else{

    echo "no se ha podido conectar a la DB";
}



?> 