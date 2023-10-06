<?php
    include_once '../configuracion.php';
    $objBaseDatos = new BaseDatos();

    // PRUEBA INSERTAR
    /*
    $sql = "INSERT INTO reclamo (tipo, descripcion, contacto) VALUES ('ventas', 'este es el tercer reclamo por un problema por una venta', 'mariamartinez@gmail.com')";
    $respuesta = $objBaseDatos->Ejecutar($sql);
    if ($respuesta){
        echo "<br> El registro se insertó correctamente.";
        if ($respuesta > 0){
            echo "<br> El id del campo autoincrement insertado es: " . $respuesta;
            $id = $respuesta;
        } else {
            echo "<br>La tabla no tiene un campo autoincrement.";
        }
    } else {
        echo "<br> No fue posible realizar la operación.";
    }
    */


    // PRUEBA ACTUALIZAR
    /*
    $sql = "UPDATE reclamo SET tipo = 'tecnico' WHERE numReclamo = 1";
    $respuesta = $objBaseDatos->Ejecutar($sql);
    if ($respuesta > -1){
        if ($respuesta > 0){
            echo "La cantidad de registros afectados por la operación fueron: " . $respuesta;
        } else {
            echo "No han sido afectados registros en la actualización";
        }
    } else {
        echo "No fue posible realizar la operacion";
    }
    */


    // PRUEBA ELIMINAR
    /*
    $sql = "DELETE FROM reclamo WHERE numReclamo = 1";
    $respuesta = $objBaseDatos->Ejecutar($sql);
    if ($respuesta > -1){
        if ($respuesta > 0){
            echo "La cantidad de registros afectados por la operación fueron: " . $respuesta;
        } else {
            echo "No han sido afectados registros en la actualización.";
        }
    } else {
        echo "No fue posible realizar la operación";
    }
    */


    // PRUEBA SELECT
    
    $sql = "SELECT * FROM reclamo";
    $respuesta = $objBaseDatos->Ejecutar($sql);
    if ($respuesta > -1){
        if ($respuesta > 0){
            echo "La cantidad de registros encontrados por la operación fueron: " . $respuesta;
            while ($registro = $objBaseDatos->Registro()){
                print_r($registro);
            }
        } else {
            echo "No se han encontrado registros.";
        }
    } else {
        echo "No fue posible realizar la operación.";
    }
    
?>