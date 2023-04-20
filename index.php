<?php
    require __DIR__ .'/ruta_secciones/secciones.php';

    $secciones = getSeccionesListaNav();
    $seccionDondeEstoy = $_GET['s'] ?? 'home';

    if(!isset($secciones[$seccionDondeEstoy])){
        $seccionDondeEstoy = '404';
}
$anio = date('Y');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="img/favicon.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/animation.css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title><?= $secciones[$seccionDondeEstoy]['title'] ?? 'Gluten Morning'; ?></title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-default">
            <h1><a id="logo" class="navbar-brand" href="index.php?s=home">Gluten Morning</a></h1>
            <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php?s=home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?s=productos">Tienda</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?s=consultas">Consultas</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main-content">
        <div class="container-fluid px-0">
            <?php
            require __DIR__ . "/secciones/". $seccionDondeEstoy . ".php";
            ?>

        </div>
    </main>
    <footer class="container-fluid page-footer font-small cyan darken-3">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 justify-content-center">
                <h4 class="text-center">Contactanos</h4>
                <p class="text-center p-0 my-md-0">WhatsApp - 541153072600</p>
                <p class="text-center p-0 my-md-0">Telefonos: 011 49020000 / 49020099</p>
                <p class="text-center p-0 my-md-0">consultas@glutenmorning.com</p>
            </div>
            <div class=" text-center col-lg-4 col-md-4 col-sm-12 col-xs-12 justify-content-center mt-5 links-redes">
                <a class=" fb-ic fa fa-facebook-f mr-md-5 mr-3 fa-lg fa-2x" href="https://es-la.facebook.com/"></a>
                <a class="li-ic fa fa-linkedin mr-md-5 mr-3 fa-lg fa-2x" href="https://linkedin.com/"></a>
                <a class="ins-ic fa fa-instagram mr-md-5 mr-3 fa-lg fa-2x" href="https://www.instagram.com/"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 justify-content-center">
                <h4 class="text-center">Desarrollado</h4>
                <p class="text-center p-0 my-md-0">Natalia Reyes</p>
                <p class="text-center p-0 my-md-0">Parcial I, Programación II</p>
                <p class="text-center p-0 my-md-0">Turno noche, comisión A, <?= $anio;?>.</p>
            </div>
        </div>
    </footer>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        new WOW().init();
    </script>
    </body>
</html>
