<?php
    $tituloPagina = "Resultado";
    include_once("../estructura/encabezado.php");
    include_once("../../configuracion.php");
    $datos = data_submitted();
    $objAbmReclamo = new AbmReclamo();
    $resp = $objAbmReclamo->alta($datos);
?>

<a class="mt-1 btn btn-lg btn-dark text-center text-white float-start" href="../paginas/implementacion.php"><i class="bi bi-arrow-90deg-left"></i></a>
<h1 class="fw-bold">
    <?php
        if ($resp){
            echo "Su reclamo ha sido recibido correctamente! Revise su casilla de correo para obtener su número de reclamo.";
        } else {
            echo "No se pudo enviar su reclamo. Vuelva a intentarlo.";
        }
    ?>
</h1>

<?php
    include_once("../estructura/pie.php");
?>