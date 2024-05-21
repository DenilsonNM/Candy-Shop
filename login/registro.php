<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <link rel="shortcut icon" href="../img/Candy-icon.ico" />
</head>
<body>    
    <header class="header" id="header">
        <div class="envio">
            <div class="envio__cabecero contenedor">
                <h2 class="envio__titulo">Envío gratis en tus compras mayores de 799</h2>
            </div>
        </div>
        <div class="contenedor">
            <div class="barra">
                <a class="logo centrar" href="../index.php">
                    <img class="logo__img" src="../img/Logo.png" alt="Logo Candy Shop">
                </a>
                <nav class="navegacion">
                    <a class="btn--cerrar" href="login.php">Volver</a>
                </nav>
            </div>
        </div>
    </header>
    <div class="menu">
        <nav class="menu__principal contenedor">
            <a class="menu__enlace" href="registro.php">Registrarse</a>
        </nav>
    </div>
    <main class="contenedor blanco">
        <h1 class="contacto-titulo">Registrarse</h1>
        <p class="contacto__dudas">Regístrate para iniciar sesión </p>
        <div class="contacto-registro"></div>
            <form class="formulario sombra" action="altas.php" method="post" id="altas">
                <div class="campo">
                    <label class="campo__label" for="">Nombre</label>
                    <input class="login__field" type="text" name="nombre" id="nombre" placeholder="Usuario">
                </div>
                <div class="campo">
                    <label class="campo__label" for="">Nacimiento</label>
                    <input class="login__field" type="date" name="nacimiento" id="nacimiento" placeholder="Fecha de Nacimiento">
                </div>
                <div class="campo">
                    <label class="campo__label" for="">Contraseña</label>
                    <input class="login__field" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
                </div>
                <div class="campo">
                    <button type="submit" value="Enviar">Registrarse</button>
                </div>
            </form>
    </main>
    <footer class="footer">
        <div class="footer__contenido contenedor">
            <div class="footer__campo">
                <h3 class="footer__titulo">Nosotros</h3>
                <a class="footer__enlace" href="../nosotros.php">¿Quiénes somos?</a>
                <a class="footer__enlace" href="../mesa.php">Mesas De Dulces</a>
                <a class="footer__enlace" href="../index.php">Todos los Productos</a>
                <a class="footer__enlace" href="#">Blog</a>
            </div>
            <div class="footer__campo">
                <h3 class="footer__titulo">Ayuda</h3>
                <a class="footer__enlace" href="../contacto.php">Contacto</a>
                <a class="footer__enlace" href="../contacto.php">¿Cómo comprar?</a>
                <a class="footer__enlace" href="#">Preguntas Frecuentes</a>
            </div>
            <div class="footer__campo">
                <h3 class="footer__titulo">MAntente en contacto</h3>
                <p class="footer__texto">
                    ¡Déjanos tu correo y entérate de nuestras ofertas, noticias, eventos 
                    y más!
                </p>
                <a class="footer__enlace footer__enlace--correo btn btn--cerrar" href="contacto.html">tucorreo@ejemplo.com</a>
                <div class="footer__iconos">
                    <a class="footer__icono--enlace" href="#"><img src="../img/facebookIcon.webp" alt="Facebook"></a>
                    <a class="footer__icono--enlace" href="#"><img src="../img/WhatsIcon.webp" alt="WhatsApp"></a>
                    <a class="footer__icono--enlace" href="#"><img src="../img/InstagramIcon.webp" alt="Instagram"></a>
                </div>
            </div>
        </div>
        <div class="colores">
            <div class="contenedor barra">
                <p class="contenedor">
                    2023 Candy Shop <br>
                    Creador por Alfredo Ek Lizarraga
                </p>
                <img class="colores__img" src="../img/tarjetas.webp" alt="">
                <a href="#header"><span class="material-symbols-outlined">
                    arrow_upward
                    </span></a>
            </div>
        </div>
    </footer>
    <script src="../js/validar.js"></script>
</body>
</html>