<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $tituloPagina ?></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <style>
            .banner-image{
                background-image: url(../img/banner-img.jpg);
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <!-- Barra Superior INICIO -->
        <nav class="navbar bg-dark bg-gradient navbar-expand-lg navbar-dark p-md-3">
            <div class="container-fluid">
                <a href="inicio.php" class="navbar-brand">PHPMailer</a>

                <button
                    type="button"
                    class="navbar-toggler collapsed"
                    data-bs-target="#navbarNav"
                    data-bs-toggle="collapse"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav align-items-end">
                        <li class="nav-item">
                            <a href="inicio.php" class="nav-link text-white">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="investigacion.php" class="nav-link text-white">Investigación</a>
                        </li>
                        <li class="nav-item">
                            <a href="implementacion.php" class="nav-link text-white">Implementación</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- Barra Superior FIN -->

        <!-- Banner de Fondo INICIO -->
        <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="content text-center">

                <!-- Contenido Principal INICIO -->
                <div class="container my-5 d-grid gap-5">
                    <div class="p-5 border text-white">