<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
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
    <link rel="shortcut icon" href="img/Candy-icon.ico" />
</head>
<body>
    <?php
    include "cabecero.php";
    ?>
    <main class="contenedor blanco">
        <h1>Nosotros</h1>
        <div class="nosotros">
            <div class="nosotros__contenido">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Voluptates illum suscipit dolorem nemo cum placeat soluta perferendis 
                    corrupti rem. Impedit doloremque quibusdam molestiae accusamus ut perspiciatis 
                    nisi quasi, tempore dolores?<br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut fuga, nulla repellat 
                    laborum corporis illum accusamus consequatur iure? Repellendus earum minus officiis, 
                    excepturi facere cupiditate odio ut quas voluptatum maxime quibusdam sed itaque culpa 
                    incidunt quia quis? Omnis, doloremque quam laborum deleniti molestiae aliquam delectus, 
                    magnam quas quos ipsam sed.
                </p>
            </div>
            <img class="nosotros__img" src="img/nosotros.webp" alt="Nosotros">
        </div>
        <hr>
        <section class="contenedor comprar sombra">
            <h2 class="comprar__titulo">¿Por qué comprar con nosotros?</h2>
            <div class="bloques">
                <div class="bloque">
                    <img class="bloque__img" src="img/icono1.webp" alt="Icono 1">
                    <h3 class="bloque__titulo">El mejor precio</h3>
                    <p class="bloque__texto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsam fugit nihil, soluta commodi 
                        numquam possimus aliquam. Sit, qui placeat excepturi incidunt fuga doloribus laudantium veniam magni 
                        minima sunt sed!
                    </p>
                </div>
                <div class="bloque">
                    <img class="bloque__img" src="img/icono2.webp" alt="Icono 2">
                    <h3 class="bloque__titulo">Envío a todo México</h3>
                    <p class="bloque__texto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsam fugit nihil, soluta commodi 
                        numquam possimus aliquam. Sit, qui placeat excepturi incidunt fuga doloribus laudantium veniam magni 
                        minima sunt sed!
                    </p>
                </div>
                <div class="bloque">
                    <img class="bloque__img" src="img/icono3.webp" alt="Icono 3">
                    <h3 class="bloque__titulo">Pagos con Tarjetas</h3>
                    <p class="bloque__texto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsam fugit nihil, soluta commodi 
                        numquam possimus aliquam. Sit, qui placeat excepturi incidunt fuga doloribus laudantium veniam magni 
                        minima sunt sed!
                    </p>
                </div>
            </div>
        </section>
    </main>
    <?php
    include "footer.php";
    ?>
    <script src="js/app.js"></script>
</body>
</html>