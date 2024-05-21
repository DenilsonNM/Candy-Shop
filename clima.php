
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

$api = "d55ebfff529148ac071312cb56e02fa0";
$cityApi = "Merida";
$url = "http://api.openweathermap.org/data/2.5/weather?q=$cityApi,mx&appid=$api&units=metric";
//$googleAppiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityApi . "&lang=en&units=metric&APPID="

$response = file_get_contents($url);

// Decodificar la respuesta JSON
$datosClima = json_decode($response, true);

if ($datosClima && $datosClima['cod'] == 200) {

    $temperatura = $datosClima['main']['temp'];
    $sensacionTermica = $datosClima['main']['feels_like'];
    $descripcion = $datosClima['weather'][0]['description'];
    $fecha = date('d F Y', $datosClima['dt']);
    $velocidadViento = $datosClima['wind']['speed'] * 3.6;

    switch ($descripcion) {
        case 'clear sky':
            $descripcion_es = 'cielo despejado';
            $icono = '☀️';
            break;
        case 'few clouds':
            $descripcion_es = 'pocas nubes';
            $icono = '🌤️';
            break;
        case 'scattered clouds':
            $descripcion_es = 'nubes dispersas';
            $icono = '⛅';
            break;
        case 'broken clouds':
            $descripcion_es = 'nubes rotas';
            $icono = '🌥️';
            break;
        case 'shower rain':
            $descripcion_es = 'lluvia ligera';
            $icono = '🌦️';
            break;
        case 'rain':
            $descripcion_es = 'lluvia';
            $icono = '🌧️';
            break;
        case 'thunderstorm':
            $descripcion_es = 'tormenta eléctrica';
            $icono = '⛈️';
            break;
        case 'mist':
            $descripcion_es = 'neblina';
            $icono = '🌫️';
            break;
        default:
            $descripcion_es = $descripcion; 
            break;
    }

    //$contenidoDiv = "<div style='background-color: #f0f0f0; padding: 20px; border-radius: 10px;'>";
    $contenidoDiv = "<div class='caja'>";
    $contenidoDiv = "<div class='weather'>";
    $contenidoDiv .= "<p><span class='weather__span'>Temperatura: </span>" . $temperatura . "°C</p>";
    $contenidoDiv .= "<p><span class='weather__span'>Sensación Térmica:</span> " . $sensacionTermica . "°C</p>";
    $contenidoDiv .= "<p><span class='weather__span'>Descripción: </span>"  . $descripcion_es  . $icono . " " . "</p>";
    $contenidoDiv .= "<p><span class='weather__span'>Vientos: </span> " . $velocidadViento . " km/h</p>";
    $contenidoDiv .= "<p><span class='weather__span'>Fecha: </span>" . $fecha . "</p>";
    $contenidoDiv .= "</div>";
    $contenidoDiv .= "</div>";

    echo $contenidoDiv;
} else {
    echo "No se pudieron obtener los datos del clima.";
}
?>
<?php
    include "footer.php";
?>
</body>