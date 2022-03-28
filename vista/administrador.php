<?php

include "../modelo/conexion_be.php";
$consulta="SELECT * FROM usuarios where cargoid = 2";
$resultado=mysqli_query($conexion, $consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEIH Administración</title>

    <link rel="stylesheet" href="css/administrador.css">
    <!-- Link de codigo -->
    <script src="https://kit.fontawesome.com/c9a8477372.js" crossorigin="anonymous"></script>
    <!-- Link materialize -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
</head>
<body>
<!-- INICIO HEADER -->
    <header class="enbacezado">
        <div class="logo">
            <img src="imagenes/logo.png" alt="">
        </div>

        <div class="menu_bar">
			
		</div>
            <nav class="menu_pc">
                <h4 class="texto">BIENVENIDO ADMINISTRADOR</h4>
            </nav>
    </header>
    <div class="ayuda">
            <a href="ayudaAdministrador.php"><i class="fas fa-question"></i></a>
    </div>
    <!-- FIN HEADER -->
    <!-- Inicio MITAD PAGINA -->
<div>
    <p class="texto_titulo"><i class="fas fa-fire-extinguisher"></i>EXTINALEX</p>
</div>
<div class="mitad">
    <table style="width:100%">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Usuarios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($row = $resultado->fetch_assoc()){
            ?>
            
            <tr>
                <td style="text-align:center"><?= $row["nombre"] . " " . $row["apellidos"]  ?></td>
                <td style="text-align:center"><?= $row["usuario"]  ?></td>
                <td style="text-align:center">
                    <select id="select-<?= $row["id_usuarios"] ?>" onchange="changeRol('select-<?= $row['id_usuarios'] ?>',<?= $row['id_usuarios'] ?>)">
                        <option value="0">Seleccionar rol</option>
                        <option value="1">Administrador</option>
                        <option value="3">Empleado</option>
                    </select>
                </td>
            </tr>
                
            <?php } ?>
        </tbody>
    </table>

</div>

<script>
    function changeRol(idSelect,idUsuario){
        const rol = document.getElementById(idSelect).value;
        if(+rol !== 0){
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../modelo/request.php");
            
            xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                alert('Rol cambiado');
                window.location.reload();
            }};

            const params = new FormData();
            params.append('id_usuario',idUsuario);
            params.append('rol',rol);
            params.append('ope',1);

            xhr.send(params);
        }
    }
</script>

</body>
</html>