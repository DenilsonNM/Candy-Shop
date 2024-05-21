<?php
require "conexion.php";

$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$disponibles = $_POST["disponibles"];
$descripcion = $_POST["descripcion"];
$nombreImg = $_FILES['imagen']['name'];
$rutaTemp = $_FILES['imagen']['tmp_name'];
$pesoImg = $_FILES['imagen']['size'];
$tipoImg = $_FILES['imagen']['type'];
$rutaServidor = 'productos';

date_default_timezone_set('UTC');
$nombreUnico = date('Y-m-d-h-s')."-". $nombreImg;

$rutaDestino = $rutaServidor . "/" . $nombreUnico;

if ($tipoImg= 'image/jpg' or $tipoImg == 'image/png' or $tipoImg == 'image/webp' 
    or $tipoImg == 'image/jpeg' or $tipoImg == 'image/svg' or $nombreImg == '') {
    move_uploaded_file($rutaTemp, $rutaDestino); //Mueve un archivo subido a una nueva ubicacion (escribe la foto en la carpeta)
}else{
    echo '
    <script>
        alert("No es una imagen");
        window.history.go(-1);
    </script>
    ';
    exit;
}

$insertar = "INSERT INTO productos(nombre, precio, disponibles, descripcion, ruta)
VALUES ('$nombre', '$precio', '$disponibles', '$descripcion', '$rutaDestino')";
$query = mysqli_query($conectar, $insertar);

if ($query) {
    echo'
    <script>
        alert("Se guardo correctamente");
        location.href ="agregar.php";
    </script>
    ';
}else{
    echo '
    <script>
        alert("Fallo en la base de datos");
        location.href ="agregar.php";
    </script>
    ';
}

?>