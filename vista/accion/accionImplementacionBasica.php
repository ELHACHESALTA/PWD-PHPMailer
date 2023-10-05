<?php
    $tituloPagina = "Resultado";
    include_once("../estructura/encabezado.php");
    include_once("../../configuracion.php");

    $datos = data_submitted();
    $obj = new Correo();
    $respuesta = $obj -> enviarCorreoBasico($datos);
?>

<h1 class="fw-bold">
    <?php
        echo $respuesta;
    ?>
</h1>

<?php
    include_once("../estructura/pie.php");
?>