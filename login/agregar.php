<?php
include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevos Productos</title>
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
        <h1 class="agregar-titulo">Agregar Nuevo Producto</h1>
        <p class="agregar__productos">Agrega Nuevos Productos al Stock</p>
        <div class="agregar"></div>
            <form class="formulario sombra" action="guardar.php" method ="post" id="formulario" enctype = "multipart/form-data">
                <div class="campo">
                    <label class="campo__label" for="">Nombre</label>
                    <input class="campo__field" type="text" name="nombre" id="nombre" placeholder="Nombre del Producto">
                </div>
                <div class="campo">
                    <label class="campo__label" for="">Precio</label>
                    <input class="campo__field" type="text" name="precio" id="precio" placeholder="Precio del Producto">
                </div>
                <div class="campo">
                    <label class="campo__label" for="">Diponibles</label>
                    <input class="campo__field" type="number" name="disponibles" id="disponibles" placeholder="Productos Disponibles">
                </div>
                <div class="campo">
                    <label class="campo__label" for="">Descripción</label>
                    <input class="campo__field" type="text" name="descripcion" id="descripcion" placeholder="Descripción del Producto">
                </div>
                <div class="campo">
                    <label class="campo__label" for="">Imagen</label>
                    <input class="campo__field" type="file" name="imagen" id="imagen">
                </div>
                <div class="campo__botones">
                    <button type="submit" value="Enviar">Guardar Datos</button>
                    <button type="reset" value="Reset">Eliminar Datos</button>
                </div>
            </form>
    </main>
    <?php
    include "footerLogin.php";
    ?>
    <script src="../js/app.js"></script>
    <script src="../js/validar.js"></script>
</body>
</html>