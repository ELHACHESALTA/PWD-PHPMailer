<?php

    class Reclamo {
        private $numReclamo;
        private $tipo;
        private $descripcion;
        private $contacto;
        private $mensajeoperacion;

        public function __construct(){
            $this->numReclamo = null;
            $this->tipo = "";
            $this->descripcion = "";
            $this->contacto = "";
            $this->mensajeoperacion = "";
        }

        public function setear($numReclamoS, $tipoS, $descripcionS, $contactoS){
            $this->setNumReclamo($numReclamoS);
            $this->setTipo($tipoS);
            $this->setDescripcion($descripcionS);
            $this->setContacto($contactoS);
        }

        public function getNumReclamo(){
            return $this->numReclamo;
        }
        public function setNumReclamo($nuevoNumReclamo){
            $this->numReclamo = $nuevoNumReclamo;
        }

        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($nuevoTipo){
            $this->tipo = $nuevoTipo;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }
        public function setDescripcion($nuevaDescripcion){
            $this->descripcion = $nuevaDescripcion;
        }

        public function getContacto(){
            return $this->contacto;
        }
        public function setContacto($nuevoContacto){
            $this->contacto = $nuevoContacto;
        }

        public function getmensajeoperacion(){
            return $this->mensajeoperacion;
        }
        public function setmensajeoperacion($nuevomensajeoperacion){
            $this->mensajeoperacion = $nuevomensajeoperacion;
        }

        public function cargar(){
            $respuesta = false;
            $base = new BaseDatos();
            $sql = "SELECT * reclamo WHERE numReclamo = " . $this->getNumReclamo();
            if ($base->Iniciar()){
                $res = $base->Ejecutar($sql);
                if ($res > -1){
                    if ($res > 0){
                        $row = $base->Registro();
                        $this->setear($row["numReclamo"], $row["tipo"], $row["descripcion"], $row["contacto"]);
                        $respuesta = true;
                    }
                }
            } else {
                $this->setmensajeoperacion("Reclamo->listar: " . $base->getError());
            }
            return $respuesta;
        }

        public function insertar(){
            $respuesta = false;
            $base = new BaseDatos();
            $sql = "INSERT INTO reclamo (tipo, descripcion, contacto) 
            VALUES ('" . $this -> getTipo() .
                "','" . $this -> getDescripcion() . 
                "','" . $this -> getContacto() . "')";
            if ($base->Iniciar()){
                if ($elid = $base->Ejecutar($sql)){
                    $this->setNumReclamo($elid);
                    $respuesta = true;
                } else {
                    $this->setmensajeoperacion("Reclamo->insertar: " . $base->getError());
                }
            } else {
                $this->setmensajeoperacion("Reclamo->insertar: " . $base->getError());
            }
            return $respuesta;
        }

        public function modificar(){
            $respuesta = false;
            $base = new BaseDatos();
            $sql = "UPDATE reclamo 
            SET tipo = '" . $this->getTipo() . 
            "', descripcion = '" . $this->getDescripcion() . 
            "', contacto = '" . $this->getContacto() . 
            "' WHERE numReclamo = " . $this->getNumReclamo();
            if ($base->Iniciar()){
                if ($base->Ejecutar($sql)){
                    $respuesta = true;
                } else {
                    $this->setmensajeoperacion("Reclamo->modificar: " . $base->getError());
                }
            } else {
                $this->setmensajeoperacion("Reclamo->modificar: " . $base->getError());
            }
            return $respuesta;
        }

        public function eliminar(){
            $respuesta = false;
            $base = new BaseDatos();
            $sql = "DELETE FROM reclamo WHERE numReclamo = " . $this->getNumReclamo();
            if ($base->Iniciar()){
                if ($base->Ejecutar($sql)){
                    $respuesta = true;
                } else {
                    $this->setmensajeoperacion("Reclamo->eliminar: " . $base->getError());
                }
            } else {
                $this->setmensajeoperacion("Reclamo->eliminar: " . $base->getError());
            }
            return $respuesta;
        }

        public function listar($parametro = ""){
            $arreglo = array();
            $base = new BaseDatos();
            $sql = "SELECT FROM reclamo ";
            if ($parametro != ""){
                $sql .= "WHERE " . $parametro;
            }
            $respuesta = $base->Ejecutar($sql);
            if ($respuesta > -1){
                if ($respuesta > 0){
                    while ($row = $base->Registro()){
                        $obj = new Reclamo();
                        $obj->setear($row["numReclamo"], $row["tipo"], $row["descripcion"], $row["contacto"]);
                        array_push($arreglo, $obj);
                    }
                }
            } else {
                $this->setmensajeoperacion("Reclamo->listar: " . $base->getError());
            }
            return $arreglo;
        }
    }

?>