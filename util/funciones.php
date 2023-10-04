<?php

    function data_submitted() {
        $_AAux = array();
        if (!empty($_POST)) {
            $_AAux =$_POST;
        } else {
            if (!empty($_GET)) {
                $_AAux = $_GET;
            }
        }
        // bloque agregado
        if (!empty($_FILES)){
            array_push($_AAux, $_FILES);
        }
        // fin de bloque agregado
        if (count($_AAux)) {
            foreach ($_AAux as $indice => $valor) {
                if ($valor == "") {
                    $_AAux[$indice] = 'null' ;
                }
            }
        }
        return $_AAux;
    }

    function verEstructura($e) {
        echo "<pre>";
        print_r($e);
        echo "</pre>"; 
    }

    spl_autoload_register(function($class_name) {
        $directorys = array(
            $_SESSION['ROOT'].'modelo/',
            $_SESSION['ROOT'].'control/',
            $GLOBALS['ROOT'].'util/class/',
        );
        foreach($directorys as $directory) {
            if (file_exists($directory.$class_name . '.php')) {
                require_once($directory.$class_name . '.php');
                return;
            }
        }
    });

?>