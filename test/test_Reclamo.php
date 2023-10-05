<?php
    include_once("../modelo/Reclamo.php");
    include_once("../modelo/conector/BaseDatos.php");

    $obj = new Reclamo();
    $obj->setear(null, "ventas", "ultima descripcion", "hola123@gmail.com");

    // prueba para insertar el objeto
    if ($obj->insertar()){
        echo "El registro se insertó correctamente";
    } else {
        echo $obj->getmensajeoperacion();
    }

    // prueba para modificar el objeto
    /*
    $obj->setDescripcion("nueva descripcion");
    if ($obj->modificar()){
        echo "El registro se actualizó correctamente";
    } else {
        echo $obj->getmensajeoperacion();
    }

    $obj->setTipo("tecnico");
    if ($obj->modificar()){
        echo "El registro se actualizó correctamente";
    } else {
        echo $obj->getmensajeoperacion();
    }
    */
    // prueba para eliminar el objeto
    /*
    if ($obj->eliminar()){
        echo "El registro se eliminó correctamente";
    } else {
        echo $obj->getmensajeoperacion();
    }
    */
?>