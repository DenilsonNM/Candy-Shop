<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Shop</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AejuHB3UOWOjdYUiisdJUbpZDQjoeg3Jpzf47Kqc2Qa7J6v3p4hgdfBqM8k5-fjTTTKmCcWUrXmAqy9k&currency=USD"></script>
    <link rel="shortcut icon" href="img/Candy-icon.ico" />
    
</head>
<body>
<?php
    include "cabecero.php";
?>

<?php

// API Key proporcionada por cambio.today
$apiKey = "52522|O505eidXHFepaoUtZAtc";

// Cantidad inicial de dólares
$cantidadDolares = 1;

// Verificar si se ha enviado un valor personalizado desde el formulario
if (isset($_POST['cantidad_dolares'])) {
    // Obtener la cantidad de dólares desde el formulario
    $cantidadDolares = $_POST['cantidad_dolares'];
}

// URL de la API para convertir de dólares a pesos mexicanos
$url = "https://api.cambio.today/v1/quotes/USD/MXN/json?quantity=$cantidadDolares&key=$apiKey";

// Realizar la solicitud a la API
$response = file_get_contents($url);

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Verificar si se obtuvieron datos válidos
if ($data && isset($data['result']) && isset($data['result']['value'])) {
    // Obtener la tasa de cambio
    $tasaCambio = $data['result']['value'];

    // Calcular la cantidad en pesos mexicanos
    $cantidadPesos = $cantidadDolares * $tasaCambio;
    $tasaCambioActual = $data['result']['value'];

    // Mostrar el resultado
    echo "<div class='conversion__wrapper conversion__wrapper--sp'>";
    echo  "<p><span class='conversion__span'>$cantidadDolares</span> USD a <span class='conversion__span'>$$cantidadPesos</span> pesos mexicanos.</p> ";
    echo "</div>";

} else {
    // Manejar el caso de error
    echo "<div class='conversion__wrapper conversion__wrapper--sp'>";
    echo  "<p>$cantidadDolares USD a <span class='conversion__span'>$$cantidadPesos</span> pesos mexicanos.</p> ";
    echo "</div>";
}

// Formulario para permitir al usuario ingresar la cantidad de dólares
echo "<div class='form__wrapper'>";
echo "<form method='post' action=''>";
echo "<div class='form__contenido'>";
echo "<label class='form__labelCambio' for='cantidad_dolares'>Dólar estadounidense:</label>";
echo "<input type='number' id='cantidad_dolares' name='cantidad_dolares' value='$cantidadDolares' min='1' required>";
echo "</div>";
echo "<button class='form__convertir' type='submit'>Convertir</button>";
echo "</form>";
echo "</div>";

echo "<div class='conversion__wrapper conversion__wrapper--tasa'>";
echo "<table>";
echo "<tr><th>Tipo de Cambio</th><td>$tasaCambioActual</td></tr>";
echo "</table>";
echo "</div>";

?>

<?php
    include "footer.php";
?>

</body>