<?php
include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
        <h1 class="contacto-titulo">Póngase en contacto con nosotros</h1>
        <p class="contacto__dudas">Escríbenos con gusto resolveremos todas tus dudas</p>
        <div class="contacto"></div>
            <form class="formulario sombra" action="enviar.php" id="contacto">
                <div class="campo">
                    <label class="campo__label" for="">Nombre</label>
                    <input class="campo__field" type="text" placeholder="Nombre" id="nombre">
                </div>
                <div class="campo">
                    <label class="campo__label" for="">Email</label>
                    <input class="campo__field" type="email" name="" id="email" placeholder="Email">
                </div>
                <div class="campo">
                    <label class="campo__label" for="">Mensaje</label>
                    <textarea class="campo__field--textarea" name="" id="mensaje" cols="30" rows="10"></textarea>
                </div>
            </form>
            <section>
                <div class="mapa">
                    <iframe class="mapa__candy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14900.127925054026!2d-89.68149374458002!3d20.991355100000018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5673be97f13569%3A0xba9b800ea022eac7!2sNC12%20CANDY%20STORE!5e0!3m2!1ses-419!2smx!4v1685803612048!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
    </main>
    <?php
    include "footerLogin.php";
    ?>
    <script src="../js/app.js"></script>
    <script src="../js/validar.js"></script>
</body>
</html>