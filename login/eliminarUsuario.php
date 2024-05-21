<?php
require "conexion.php";
$id = $_GET["id"];

$eliminar = "DELETE FROM altas WHERE id = $id";
$query = mysqli_query($conectar, $eliminar);

if ($query) {
    header("Location: verDatos.php");
}else{
    echo "No se pudo eliminar!";
}
?>