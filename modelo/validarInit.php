<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$conexion=mysqli_connect("localhots", "root", "hayderarenasah", "login_register_db");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location:vista/pagina_principal.php");
}else{
    echo'
    <script>
        alert("Error, usuario y contraseña incorrectos, por favol verver a registrarse");
        window.location= "../index.php";
        </script>
        ';
}
mysqli_free_result($resultado);
mysqli_close($conexion);