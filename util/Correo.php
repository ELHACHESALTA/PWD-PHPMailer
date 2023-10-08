<?php
    use PHPMailer\PHPMailer\PHPMailer;
    
    class Correo {

        /**
         * Envía un correo llenandolo con la información contenida en el arreglo ingresado por parámetro.
         * @param array $datos
         * @return string
         */
        function enviarCorreo($datos){
            $mail = new PHPMailer();

            // Configuración del servidor.
            $mail -> SMTPDebug  = 0;                                        // Salida de depuración detallada (0 - Deshabilitada / 2 - Habilitada).
            $mail -> isSMTP();                                              // Configura el envío usando SMTP.
            $mail -> Host       = "smtp.gmail.com";                         // Configura el servidor SMTP.
            $mail -> SMTPAuth   = true;                                     // Habilita la autenticación SMTP.
            $mail -> Username   = "reclamoventas@gmail.com";                // Correo que se va a utilizar para el envío.
            $mail -> Password   = "aveevgtlmqjcspbf";                       // Contraseña del correo que se va a utilizar para el envío.
            $mail -> SMTPSecure = "ssl";                                    // Habilita el cifrado implícito (TLS/SSL).
            $mail -> Port       = 465;                                      // Puerto TCP al que conectarse.

            // Destinatarios
            $mail -> setFrom("reclamoventas@gmail.com", $datos["nombre"]);  // Datos del remitente (correo y nombre).
            $mail -> addAddress("reclamoventas@gmail.com");                 // Datos del destinatario (correo).

            // Archivos adjuntos
            if (isset($datos[0])) {
                if (!copy($datos[0]["archivoAdjunto"]["tmp_name"], "../../archivos/".$datos[0]["archivoAdjunto"]["name"])) {
                    $respuesta = "ERROR: No se pudo cargar el archivo";
                } else {
                    $respuesta = "Se pudo cargar el archivo exitosamente!";
                }
                $mail->addAttachment("../../archivos/".$datos[0]["archivoAdjunto"]["name"]);
            }

            // Contenido
            $mail -> isHTML(true);                                          // Configura el formato del correo en HTML.
            $mail -> CharSet    = "UTF-8";                                  // Codificación para caracteres especiales.
            $mail -> Subject    = $datos["asunto"];                         // Asunto del correo.
            $mail -> Body       = $datos["cuerpo"];                         // Cuerpo del correo.

            if (isset($datos[0])) {
                if($mail -> send()){
                    $respuesta .= "<br><br>El mensaje se ha enviado con exito!";
                } else {
                    $respuesta .= "<br><br>El mensaje no se ha podido enviar. El error es: {$mail -> ErrorInfo}";
                }

                // Elimina los archivos adjuntos almacenados en el proyecto una vez que fueron enviados.
                $rutaArchivoAdjunto = "../../archivos/".$datos[0]["archivoAdjunto"]["name"];
                unlink($rutaArchivoAdjunto);
            } else {
                if ($mail -> send()) {
                    $respuesta = "El mensaje se ha enviado con exito!";
                } else {
                    $respuesta = "El mensaje no se ha podido enviar. El error es: {$mail -> ErrorInfo}";
                }
            }

            return $respuesta;
        }

        /**
         * Valida que el archivo adjunto no supere los 25Mb.
         * @return string
         */
        function validaArchivo($datosFormulario) {
            $tamanioArchivo = (($datosFormulario[0]["archivoAdjunto"]["size"]/1024)/1024);
            if ($tamanioArchivo < 25) {
                $respuesta = $this->enviarCorreo($datosFormulario);
            } else {
                $respuesta = "El archivo no se ha podido enviar debido a que su tamaño es mayor a 25 mb";
            }
            return $respuesta;
        }

        function enviarCorreoVentaAVenta($datos){
            $mail = new PHPMailer();

            // Configuración del servidor.
            $mail -> SMTPDebug = 0;                                         // Salida de depuración detallada (0 - Deshabilitada / 2 - Habilitada).
            $mail -> isSMTP();                                              // Configura el envío usando SMTP.
            $mail -> Host       = "smtp.gmail.com";                         // Configura el servidor SMTP.
            $mail -> SMTPAuth   = true;                                     // Habilita la autenticación SMTP.
            $mail -> Username   = "reclamoventas@gmail.com";                // Correo que se va a utilizar para el envío.
            $mail -> Password   = "aveevgtlmqjcspbf";                       // Contraseña del correo que se va a utilizar para el envío.
            $mail -> SMTPSecure = "ssl";                                    // Habilita el cifrado implícito (TLS/SSL).
            $mail -> Port       = 465;                                      // Puerto TCP al que conectarse.

            // Destinatarios
            $mail -> setFrom("reclamoventas@gmail.com", $datos["nombre"]);  // Datos del remitente (correo y nombre).
            $mail -> addAddress("reclamoventas@gmail.com");                 // Datos del destinatario (correo).

            // Contenido
            $mail -> isHTML(true);                                          // Configura el formato del correo en HTML.
            $mail -> CharSet    = "UTF-8";                                  // Codificación para caracteres especiales.
            $mail -> Subject    = "Reclamo del área de ventas. Número de reclamo: " . $datos["numReclamo"]; // Asunto del correo.
            $mail -> Body       = $datos["cuerpo"];                         // Cuerpo del correo.

            if ($mail -> send()) {
                $respuesta = true;
            } else {
                $respuesta = false;
            }
            return $respuesta;
        }

        function enviarCorreoVentaAUsuario($datos){
            $mail = new PHPMailer();

            // Configuración del servidor.
            $mail -> SMTPDebug  = 0;                                        // Salida de depuración detallada (0 - Deshabilitada / 2 - Habilitada).
            $mail -> isSMTP();                                              // Configura el envío usando SMTP.
            $mail -> Host       = "smtp.gmail.com";                         // Configura el servidor SMTP.
            $mail -> SMTPAuth   = true;                                     // Habilita la autenticación SMTP.
            $mail -> Username   = "reclamoventas@gmail.com";                // Correo que se va a utilizar para el envío.
            $mail -> Password   = "aveevgtlmqjcspbf";                       // Contraseña del correo que se va a utilizar para el envío.
            $mail -> SMTPSecure = "ssl";                                    // Habilita el cifrado implícito (TLS/SSL).
            $mail -> Port       = 465;                                      // Puerto TCP al que conectarse.

            // Destinatarios
            $mail -> setFrom("reclamoventas@gmail.com", "Departamento de Ventas");  // Datos del remitente (correo y nombre).
            $mail -> addAddress($datos["correo"]);                          // Datos del destinatario (correo).

            // Contenido
            $mail -> isHTML(true);                                          // Configura el formato del correo en HTML.
            $mail -> CharSet    = "UTF-8";                                  // Codificación para caracteres especiales.
            $mail -> Subject    = "Reclamo realizado sobre el área de ventas";  // Asunto del correo.
            $mail -> Body       = "Muchas gracias: " . $datos["nombre"] . "! Hemos recibido su reclamo con el N° " . $datos["numReclamo"];  // Cuerpo del correo.

            if ($mail -> send()) {
                $respuesta = true;
            } else {
                $respuesta = false;
            }
            return $respuesta;
        }

        public function enviarCorreoTecnicoATecnico($datos){
            $mail = new PHPMailer();

            // Configuración del servidor.
            $mail -> SMTPDebug  = 0;                                        // Salida de depuración detallada (0 - Deshabilitada / 2 - Habilitada).
            $mail -> isSMTP();                                              // Configura el envío usando SMTP.
            $mail -> Host       = "smtp.gmail.com";                         // Configura el servidor SMTP.
            $mail -> SMTPAuth   = true;                                     // Habilita la autenticación SMTP.
            $mail -> Username   = "reclamotecnicos@gmail.com";              // Correo que se va a utilizar para el envío.
            $mail -> Password   = "owisicrfengnsqdd";                       // Contraseña del correo que se va a utilizar para el envío.
            $mail -> SMTPSecure = "ssl";                                    // Habilita el cifrado implícito (TLS/SSL).
            $mail -> Port       = 465;                                      // Puerto TCP al que conectarse.

            // Destinatarios
            $mail -> setFrom("reclamotecnicos@gmail.com", $datos["nombre"]);// Datos del remitente (correo y nombre).
            $mail -> addAddress("reclamotecnicos@gmail.com");               // Datos del destinatario (correo).

            // Contenido
            $mail -> isHTML(true);                                          // Configura el formato del correo en HTML.
            $mail -> CharSet    = "UTF-8";                                  // Codificación para caracteres especiales.
            $mail -> Subject    = "Reclamo del área Técnica. Número de reclamo: " . $datos["numReclamo"];   // Asunto del correo.
            $mail -> Body       = $datos["cuerpo"];                         // Cuerpo del correo.

            if ($mail -> send()) {
                $respuesta = true;
            } else {
                $respuesta = false;
            }
            return $respuesta;
        }

        function enviarCorreoTecnicoAUsuario($datos){
            $mail = new PHPMailer();

            // Configuración del servidor.
            $mail -> SMTPDebug  = 0;                                        // Salida de depuración detallada (0 - Deshabilitada / 2 - Habilitada).
            $mail -> isSMTP();                                              // Configura el envío usando SMTP.
            $mail -> Host       = "smtp.gmail.com";                         // Configura el servidor SMTP.
            $mail -> SMTPAuth   = true;                                     // Habilita la autenticación SMTP.
            $mail -> Username   = "reclamotecnicos@gmail.com";              // Correo que se va a utilizar para el envío.
            $mail -> Password   = "owisicrfengnsqdd";                       // Contraseña del correo que se va a utilizar para el envío.
            $mail -> SMTPSecure = "ssl";                                    // Habilita el cifrado implícito (TLS/SSL).
            $mail -> Port       = 465;                                      // Puerto TCP al que conectarse.

            // Destinatarios
            $mail -> setFrom("reclamotecnicos@gmail.com", "Departamento Tecnico");  // Datos del remitente (correo y nombre).
            $mail -> addAddress($datos["correo"]);                          // Datos del destinatario (correo).

            // Contenido
            $mail -> isHTML(true);                                          // Configura el formato del correo en HTML.
            $mail -> CharSet    = "UTF-8";                                  // Codificación para caracteres especiales.
            $mail -> Subject    = "Reclamo realizado sobre el área técnica";// Asunto del correo.
            $mail -> Body       = "Muchas gracias: " . $datos["nombre"] . "! Hemos recibido su reclamo con el N°: " . $datos["numReclamo"]; // Cuerpo del correo.

            if ($mail->send()) {
                $respuesta = true;
            } else {
                $respuesta = false;
            }
            return $respuesta;
        }

    }

?>