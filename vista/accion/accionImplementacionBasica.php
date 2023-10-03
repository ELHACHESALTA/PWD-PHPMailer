<?php
    $tituloPagina = "Resultado";
    include_once("../estructura/encabezado.php");
    include_once("../../configuracion.php");
    
    include_once('../../util/class/PHPMailer.php');
    include_once('../../util/class/SMTP.php');

    $datos = data_submitted();
    $obj = new ControlImplementacionBasica();
    $respuesta = $obj -> enviarCorreo($datos);
?>

<h1>ACCIÓN IMPLEMENTACIÓN BÁSICA</h1>

<?php
    echo $respuesta;
    include_once("../estructura/pie.php");
?>