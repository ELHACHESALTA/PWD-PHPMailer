<?php
    $tituloPagina = "Implementación";
    include_once("../estructura/encabezado.php");
?>

<h1 class="mb-5 fw-bold">Implementación</h1>
<div class="list-group">
    <a href="implementacionBasica.php" class="list-group-item list-group-item-action list-group-item-dark">Envío de correo estándar</a>
    <a href="implementacionAdjunto.php" class="list-group-item list-group-item-action list-group-item-dark">Envío con archivo adjunto</a>
    <a href="implementacionBD.php" class="list-group-item list-group-item-action list-group-item-dark">Envío con base de datos</a>
</div>

<?php
    include_once("../estructura/pie.php");
?>