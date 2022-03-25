<?php

include 'conexion_be.php';
if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $cargoid = $_POST['cargoid'];
}

$query = "INSERT INTO usuarios (nombre, apellidos, correo, usuario, contraseña, cargoid) 
VALUES ('$nombre', '$apellidos', '$correo', '$usuario', '$contraseña', '$cargoid')";

$ejecutar = mysqli_query($conexion,$query);

if(isset($_POST['submit'])){
    if(empty($nombre)) {
        echo '
        <script>
        alert("usuario no almacenado por falta de nombre");
        window.location= "../index.php";
        </script>
        ';
    } else{
        if(strlen($nombre) > 20) {
            echo '
            <script>
            alert("nombre demasiado largo, por favor verifique");
            window.location= "../index.php";
            </script>
            ';
        }
    }
    if(empty($apellidos)){
        echo '
        <script>
        alert("usuario no almacenado por falta de apellido");
        window.location= "../index.php";
        </script>
        ';
    } else{
        if(strlen($nombre) > 20) {
            echo '
            <script>
            alert("apellido demasiado largo, por favor verifique");
            window.location= "../index.php";
            </script>
            ';
        }
    }
    if(empty($correo)){
        echo '
        <script>
        alert("usuario no almacenado por falta de correo");
        window.location= "../index.php";
        </script>
        '; 
    } else{
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            echo'
            <script>
            alert("correo incorrecto");
            window.location= "../index.php";
            </script>
            '; 
        }
    }
    if(empty($usuario)){
        echo '
        <script>
        alert("usuario no almacenado por falta de usuario");
        window.location= "../index.php";
        </script>
        '; 
    }else{
        if(strlen($usuario) > 15){
            echo '
            <script>
            alert("usuario demasiado largo, por favor verifique");
            window.location= "../index.php";
            </script>
            ';
        }
    }
    if(empty($contraseña)){
        echo '
        <script>
        alert("usuario no almacenado por falta de nombre");
        window.location= "../index.php";
        </script>
        ';
    }
}

if ($ejecutar){

    echo  '
    <script>
    alert("usuario almacenado");
    window.location= "../index.php";
    </script>
    ';
} else{
/*
    echo  '
    <script>
    alert("intentalo de nuevo usuario no almacenado");
    window.location= "../index.php";
    </script>
    ';*/
} 

mysqli_close($conexion);
    


?>