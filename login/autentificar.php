<?php
require "conexion.php";

$usuario = addslashes($_POST["usuario"]);
$contrasena = addslashes($_POST["contrasena"]);

$comparar = "SELECT * from altas WHERE nombre = '$usuario' AND contrasena = '$contrasena'";
$resultado = mysqli_query($conectar, $comparar);

if (mysqli_num_rows($resultado) > 0) {
    session_start();
    $_SESSION["autentificado"] = "true";
    header("Location: panel.php");
}else{
    echo "
    <script>
        alert('Error en la autentificacion');
        location.href = 'login.php?errorusuario = true';
    </script>
    ";
}
mysqli_free_result($resultado);
mysqli_close($conectar);
?>