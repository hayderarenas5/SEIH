<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGINN</title>
    
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

   
     <link rel="stylesheet" href="../SEIH/vista/css/estilos.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                      <h3>¿Ya tienes una cuenta?</h3>
                       <p>Inicia sesion para entrar en la paginaa</p>
                       <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                   </div>
                   <div class="caja__trasera-register">
                         <h3>¿Aun no tienes una cuenta?</h3>
                         <p>Registrate para que puedas iniciar sesion</p>
                         <button id="btn__registrarse">Registrarse</button>
                     </div>
                 </div>
                
            

<!--formulario login y registro-->
    <div class="contenedor__login-register"> 
        <!--login-->
        <form action="modelo/validarInit.php" method="POST">
        <h2>Iniciar sesion</h2>
        <input type="text" placeholder="Nombre Del Usuario" name="usuario">
        <input type="password" placeholder="Contraseña" name="contrasena">

        <button name="submit">Iniciar Sesión</button>
    
        </form>
        
        <!--registro-->
        <form action="modelo/registro_usuario_be.php" method= "POST" class="formulario__register">
        <h2>Registrarse</h2>
        <input type="text" placeholder="Nombre" name= "nombre" value="<?php
        if(isset($nombre)) echo $nombre
        ?>">
        <input type="text" placeholder="Apellidos" name= "apellidos" value="<?php
        if(isset($apellidos)) echo $apellidos
        ?>">
        <input type="varchar" placeholder="Correo electronico" name= "correo" value="<?php
        if(isset($correo)) echo $correo
        ?>">
        <input type="varchar" placeholder="Usuario" name = "usuario" value="<?php
        if(isset($usuario)) echo $usuario
        ?>">
        <input type="password" placeholder="Contraseña" name= "contraseña">

        <input type="text" value="2" name= "cargoid" hidden >
        <button name="submit">Registrarse</button>
        </form>
     </div>
   </div>
</Main>
<script src="modelo/js/script.js"></script>
</body>
</html>