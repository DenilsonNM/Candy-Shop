<?php
$destino = "alfredoek50@gmail.com";
$asunto = "Contacto de Candy Shop";

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$contenido = "<b>Nombee: </b>".$nombre."<br>"."<b>Email: </b>".$email."<br>" ."<b>Mensaje: </b>".$mensaje;

//para que reconozca las etiquetas HTML
$encabezados = "MIME-Version: 1.0" . "\r\n";
$encabezados = "Content-type:text/html charset=UTF-8"."\r\n";

//Función mail y redireccionamiento
mail($destino, $asunto, $contenido,$encabezados);
//Para redirijir al usuario a otra página
header("Location: gracias.php")
?>
