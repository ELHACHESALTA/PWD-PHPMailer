<?php
    $tituloPagina = "Implementación";
    include_once("../estructura/encabezado.php");
?>

<a class="mt-1 btn btn-lg btn-dark text-center text-white float-start" href="inicio.php"><i class="bi bi-arrow-90deg-left"></i></a>
<h1 class="mb-5 fw-bold">Implementación</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card text-white bg-dark">
            <div class="card-body">
                <h5 class="card-title">Envío de correo estándar</h5>
                <a href="implementacionBasica.php" class="stretched-link"></a>
            </div>
            <img src="../img/correoBasico.jpg" class="card-img-top rounded-bottom" alt="Formulario de envío de correo estándar">
        </div>
    </div>
    <div class="col">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Envío con archivo adjunto</h5>
                    <a href="implementacionAdjunto.php" class="stretched-link"></a>
                </div>
                <img src="../img/correoAdjunto.jpg" class="card-img-top rounded-bottom" alt="Formulario de envío con archivo adjunto">
            </div>
    </div>
    <div class="col">
        <div class="card text-white bg-dark">
            <div class="card-body">
                <h5 class="card-title">Envío con base de datos</h5>
                <a href="implementacionBD.php" class="stretched-link"></a>
            </div>
            <img src="../img/correoBD.jpg" class="card-img-top rounded-bottom" alt="Formulario de envío con base de datos">
        </div>
    </div>
</div>

<?php
    include_once("../estructura/pie.php");
?>