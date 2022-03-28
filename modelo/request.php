<?php
if(isset($_POST['ope']) && $_POST['ope']){
    include "conexion_be.php";
    switch ($_POST['ope']) {
        /** Metodo para cambiar rol del usuario */
        case '1':
            $id_usuario = $_POST['id_usuario'];
            $rol = $_POST['rol'];
            
            $consulta="UPDATE usuarios SET cargoid = $rol where id_usuarios = $id_usuario";
            $resultado=mysqli_query($conexion, $consulta);

            echo json_encode(array('status'=>true));
            break;
    }
    
}