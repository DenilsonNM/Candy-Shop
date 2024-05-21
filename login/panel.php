<?php
include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Shop</title>
    <link rel="stylesheet" href="../css/estilos.css">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="../img/Candy-icon.ico" />
</head>
<body>
<?php
    include "cabeceroLogin.php";
    ?>
    <main class="contenedor blanco">
        <section class="sliders">
            <div class="slider">
                <ul>
                    <li><img src="../img/slider1.webp" alt="Slider 1"></li>
                    <li><img src="../img/slider2.webp" alt="Slider 2"></li>
                    <li><img src="../img/slider3.webp" alt="Slider 3"></li>
                    <li><img src="../img/slider4.webp" alt="Slider 4"></li>
                </ul>
            </div> 
        </section>
        <hr>
        <h1>Nuestros Productos</h1>
        <div class="grid sombra">
            <?php
            require "conexion.php";
            $datos = "SELECT * from productos order by id ASC";
            $query = mysqli_query($conectar, $datos);

            while ($fila = mysqli_fetch_assoc($query)) {
                echo '<div class="producto sombra">';
                echo "<img class = 'producto__img' src = '".$fila["ruta"]."'><br>";
                echo '<div class="producto__informacion">';
                echo '<span class="producto__nombre "><span>'. $fila["nombre"]."<br>";
                echo '<span class="descripcion"><span>'. $fila["descripcion"]."<br>";
                echo '<span class="producto__precio"> $<span>'.'<span class=""><span>'. $fila["precio"];
                echo "</div>";
                echo '<a class="btn--producto" href="#">Ver</a>';
                echo "</div>";
                }
                ?>
            <div class="grafico grafico--dulce1 blanco"></div>
            <div class="grafico grafico--dulce2 blanco"></div>
        </div>
    </main>
    <section class="contenedor blanco">
        <div class="cupones">
            <div class="cupon">
                <img src="../img/cupon1.webp" alt="Cupon 1">
            </div>
            <div class="cupon">
                <img src="../img/cupon2.webp" alt="Cupon 2">
            </div>
        </div>
        <div class="promociones">
            <div class="promocion">
                <img src="../img/promocion1.webp" alt="Promocion 1">
            </div>
            <div class="promocion">
                <img src="../img/promocion2.webp" alt="Promocion 2">
            </div>
            <div class="promocion">
                <img src="../img/promocion3.webp" alt="Promocion 3">
            </div>
        </div>
    </section>
    <?php
    include "footerLogin.php";
    ?>
    <script src="../js/app.js"></script>
</body>
</html>