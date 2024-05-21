<?php
require "conexion.php";

$nombre = $_POST["nombre"];
$nacimiento = $_POST["nacimiento"];
$contrasena = $_POST["contrasena"];

$insertar = "INSERT INTO altas(nombre, nacimiento, contrasena)
VALUES('$nombre', '$nacimiento', '$contrasena')";
$query = mysqli_query($conectar, $insertar);

if ($query) {
    echo'
    <script>
        alert("Se guardo correctamente");
        location.href ="registro.php";
    </script>
    ';
}else{
    echo '
    <script>
        alert("Fallo en la base de datos");
        location.href ="registro.php";
    </script>
    ';
}
?>