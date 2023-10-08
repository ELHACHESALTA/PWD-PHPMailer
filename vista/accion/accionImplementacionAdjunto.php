<?php
    $tituloPagina = "Envío con archivo adjunto (Resultado)";
    include_once("../estructura/encabezado.php");
    include_once("../../configuracion.php");

    $datos = data_submitted();
    $objCorreo = new Correo();
    $respuesta = $objCorreo -> validaArchivo($datos);
?>

<a class="mt-1 btn btn-lg btn-dark text-center text-white float-start" href="../paginas/implementacion.php"><i class="bi bi-arrow-90deg-left"></i></a>
<h1 class="fw-bold">
    <?php
        echo $respuesta;
    ?>
</h1>

<?php
    include_once("../estructura/pie.php");
?>