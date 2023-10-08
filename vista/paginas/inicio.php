<?php
    $tituloPagina = "Inicio";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $tituloPagina ?></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="image/jpg" href="../img/favicon.jpg"/>
    </head>
    <body>
        <!-- Barra Superior INICIO -->
        <nav class="navbar bg-dark bg-gradient navbar-expand-lg navbar-dark position-absolute top-0 w-100">
            <div class="container-fluid">
                <a href="../paginas/inicio.php" class="navbar-brand fw-bold"><img src="../img/favicon.jpg" alt="logoPHPMailer"> PHPMailer</a>
            </div>
        </nav>
        <!-- Barra Superior FIN -->

        <!-- Banner de Fondo INICIO -->
        <div class="banner-image w-100 vh-100 d-flex justify-content-center overflow-auto">
            <div class="content text-center mt-5 w-100">

                <!-- Contenido Principal INICIO -->
                <div class="container mt-2 d-grid gap-5">
                    <div class="py-5">
                        <img src="../img/PHPMailer.jpg" class="img-fluid rounded" alt="PHP Mailer">
                        <br> <br>
                        <div class="card text-bg-dark mb-3">
                            <div class="card-header"><h5>¿Qué es PHPMailer?</h5></div>
                            <div class="card-body">
                                <p>Es una clase llena de funcionalidades para la creación y transferencia de correo electrónico en PHP.</p>
                                <p>Aunque PHP cuenta con la función básica <b>mail()</b>, PHPMailer es más fácil de usar y nos brinda una sintaxis orientada a objetos más limpia. Como también nos provee asistencia para hacer uso de funciones necesarias en la actualidad como encriptación, autenticación, mensajes HTML y archivos adjuntos.</p>
                                <p>Los usos más habituales para esta libreria son la de crear formularios de contactos donde los usuarios cargan la información y la podemos recibir a través de un correo. Y también para el envío de corros másivos configurados mediante programación.</p>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card text-bg-dark mb-3">
                                    <div class="card-header"><h5>Investigación</h5></div>
                                    <div class="card-body">
                                        <a href="../paginas/investigacion.php" class="stretched-link"></a>
                                        <p class="card-text">Acá podrás encontrar todo lo referente a la instalación, proceso y explicación paso a paso de las distintas implementaciones con la librería elegida.</p>
                                        <a class="btn btn-secondary">Ir a Investigación</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-bg-dark mb-3">
                                    <div class="card-header"><h5>Implementaciones</h5></div>
                                    <div class="card-body">
                                        <a href="../paginas/implementacion.php" class="stretched-link"></a>
                                        <p class="card-text">Acá podrás encontrar las distintas etapas del proyecto, primeramente arrancamos con un formulario simple de envío de correo y finalizamos implementandolo utilizando todas las capas de un patrón de diseño MVC.</p>
                                        <a class="btn btn-secondary">Ir a Implementaciones</a>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php
    include_once("../estructura/pie.php");
?>