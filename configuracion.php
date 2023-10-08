<?php

    header("Content-Type: text/html; charset=utf-8");
    header ("Cache-Control: no-cache, must-revalidate ");

    // Carpeta princpial del proyecto.
    $PROYECTO = "PWD-PHPMailer";

    // Variable que almacena el directorio del proyecto.
    $ROOT = $_SERVER["DOCUMENT_ROOT"] . "/$PROYECTO/";

    include_once($ROOT . "util/funciones.php");

    $_SESSION["ROOT"] = $ROOT;

?>