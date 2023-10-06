<?php

    class AbmReclamo{
        // Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

        /**
         * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
         * @param array $param
         * @return Reclamo
         */
        private function cargarObjeto($param){
            $obj = null;
            if (array_key_exists('numReclamo',$param) and array_key_exists('tipo',$param) and array_key_exists('descripcion',$param) and array_key_exists('contacto',$param)) {
                $obj = new Reclamo();
                $obj->setear($param['numReclamo'], $param['tipo'], $param['descripcion'], $param['contacto']);
            }
            return $obj;
        }

        /**
         * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
         * @param array $param
         * @return Reclamo
         */
        private function cargarObjetoConClave($param){
            $obj = null;

            if ( isset($param['numReclamo']) ) {
                $obj = new Reclamo();
                $obj->setear($param['numReclamo'], null, null, null);
            }
            return $obj;
        }

        /**
         * Corrobora que dentro del arreglo asociativo están seteados los campos claves
         * @param array $param
         * @return boolean
         */
        private function seteadosCamposClaves($param){
            $resp = false;
            if (isset($param['numReclamo'])) {
                $resp = true;
            }
            return $resp;
        }

        /**
         * @param array $param
         */
        public function alta($param){
            $resp = false;
            $param['numReclamo'] = null;
            $objReclamo = $this->cargarObjeto($param);
            if ($objReclamo != null and $objReclamo->insertar()) {
                $numReclamo = $objReclamo->getNumReclamo();
                $objCorreo = new Correo();
                $newParam = ["nombre" => $param["nombre"], "cuerpo" => $param["descripcion"], "correo" => $param["contacto"], "numReclamo" => $numReclamo];
                if ($param["tipo"] == "ventas"){
                    if ($objCorreo->enviarCorreoVentaAVenta($newParam) && $objCorreo->enviarCorreoVentaAUsuario($newParam)){
                        $resp = true;
                    }
                } elseif ($param["tipo"] == "tecnico") {
                    if ($objCorreo->enviarCorreoTecnicoATecnico($newParam) && $objCorreo->enviarCorreoTecnicoAUsuario($newParam)){
                        $resp = true;
                    }
                }
            }
            return $resp;
        }

        /**
         * Permite eliminar un objeto 
         * @param array $param
         * @return boolean
         */
        public function baja($param){
            $resp = false;
            if ($this->seteadosCamposClaves($param)) {
                $objReclamo = $this->cargarObjetoConClave($param);
                if ($objReclamo != null and $objReclamo->eliminar()) {
                    $resp = true;
                }
            }
            return $resp;
        }

        /**
         * Permite modificar un objeto
         * @param array $param
         * @return boolean
         */
        public function modificacion($param){
            //echo "Estoy en modificación";
            $resp = false;
            if ($this->seteadosCamposClaves($param)) {
                $objReclamo = $this->cargarObjeto($param);
                if ($objReclamo != null and $objReclamo->modificar()) {
                    $resp = true;
                }
            }
            return $resp;
        }

        /**
         * Permite buscar un objeto
         * @param array $param
         * @return boolean
         */
        public function buscar($param){
            $where = " true ";
            if ($param <> null) {
                if (isset($param['numReclamo'])) {
                    $where .= " and numReclamo =" . $param['numReclamo'];
                }
                if (isset($param['tipo'])) {
                    $where .= " and tipo ='" . $param['tipo'] . "'";
                }
                if (isset($param['descripcion'])) {
                    $where .= " and descripcion ='" . $param['descripcion'] . "'";
                }
                if (isset($param['contacto'])) {
                    $where .= " and contacto ='" . $param['contacto'] . "'";
                }
            }
            // $arreglo = Reclamo::listar($where);
            $objReclamo = new Reclamo();
            $arreglo = $objReclamo -> listar($where);
            return $arreglo;
        }

    }

?>