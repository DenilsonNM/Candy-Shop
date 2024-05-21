<?php
include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
        <h3 class="agregar-titulo">Nuevos Productos</h3>
        <?php
        require "conexion.php";

        $datos = "SELECT * from productos order by id ASC";
        $resultado = mysqli_query($conectar, $datos);
        ?>
<div class="contenido-tabla">
<table class="tabla">
    <tr>
        <th>Nombre</th>
        <th>Foto</th>
        <th>Descripción</th>
        <th>Precio $</th>
        <th>Disponibles</th>
        <th>Eliminar</th>
    </tr>
    <?php
    while ($fila = mysqli_fetch_assoc($resultado)) {
    ?>
    <tr>
        <td><?php echo $fila["nombre"];?></td>
        <td><?php echo "<img class='foto' src='" . $fila["ruta"] . "'>"; ?></td>
        <td><?php echo $fila["descripcion"];?></td>
        <td><?php echo $fila["precio"];?></td>
        <td><?php echo $fila["disponibles"];?></td>
        <td><a href="#" onClick = "validar('eliminar.php?id=<?php echo $fila["id"]; ?>')"><img class="eliminar" src="../img/eliminar.webp" alt="eliminar"></a></td>
    </tr>
    <?php
    }
    ?>
    </table>
</div>

<h3 class="agregar-titulo">Usuarios</h3>
<?php
require "conexion.php";
$datos = "SELECT * from altas order by id ASC";
$resultado = mysqli_query($conectar, $datos);
?>
<div class="contenido-tabla">
<table class="tabla">
    <tr>
        <th>Usuario</th>
        <th>Fecha de Nacimiento</th>
        <th>Contraseña</th>
        <th>Eliminar</th>
    </tr>
    <?php
    while ($fila = mysqli_fetch_assoc($resultado)) {
    ?>
    <tr>
        <td><?php echo $fila["nombre"];?></td>
        <td><?php echo $fila["nacimiento"];?></td>
        <td><?php echo $fila["contrasena"];?></td>
        <td><a href="#" onClick = "validar('eliminarUsuario.php?id=<?php echo $fila["id"]; ?>')"><img class="eliminar" src="../img/eliminar.webp" alt="eliminar"></a></td>
    </tr>
    <?php
    }
    ?>
    </table>
</div>
    </main>
    <?php
    include "footerLogin.php";
    ?>  
    <script src="../js/eliminar.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>