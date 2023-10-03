<?php
    $tituloPagina = "Implementación";
    include_once("../estructura/encabezado.php");
?>

<h1>IMPLEMENTACIÓN</h1>
<div class="row justify-content-center">
    <div class="col-10">
        <div class="list-group">
            <a href="implementacionBasica.php" class="list-group-item list-group-item-action list-group-item-dark">Envío Correo Estándar</a>
            <a href="implementacionAdjunto.php" class="list-group-item list-group-item-action list-group-item-dark">Envío con archivo adjunto</a>
            <a href="implementacionBD.php" class="list-group-item list-group-item-action list-group-item-dark">Envío con Base de Datos</a>
        </div>
    </div>
</div>

<?php
    include_once("../estructura/pie.php");
?>