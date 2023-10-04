<?php

    use PHPMailer\PHPMailer\PHPMailer;
    
    class ControlImplementacionAdjunto {
        function enviarCorreo($datos){
            if (!copy($datos[0]["archivoAdjunto"]["tmp_name"], "../../archivos/".$datos[0]["archivoAdjunto"]["name"])) {
                $respuesta = "ERROR: no se pudo cargar el archivo";
            } else {
                $respuesta = "Se pudo cargar el archivo exitosamente!";
            }
            $mail = new PHPMailer();
            //Server settings
            $mail->SMTPDebug = 0;                                       //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'reclamoventas@gmail.com';              //correo
            $mail->Password   = 'aveevgtlmqjcspbf';                     //contraseña
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('reclamoventas@gmail.com', $datos['nombre']); // usuario que envía
            $mail->addAddress('reclamoventas@gmail.com');     // mail que recibe 
        
            //Attachments
            // esto se utiliza para enviar archivos
            $mail->addAttachment("../../archivos/".$datos[0]["archivoAdjunto"]["name"]);
            //Content
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->Subject = $datos['asunto'];
            $mail->Body    = $datos['cuerpo'];
            // mensaje alternativo
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            if($mail->send()){
                $respuesta .= " <br> El mensaje se ha enviado con exito!";
            } else {
                $respuesta .= " <br> El mensaje no se ha podido enviar. El error es: {$mail->ErrorInfo}";
            }
            return $respuesta;
        }

        function validaArchivo($datosFormulario){
            $tamanioArchivo = (($datosFormulario[0]["archivoAdjunto"]["size"]/1024)/1024);
            if ($tamanioArchivo < 25){
                $respuesta = $this->enviarCorreo($datosFormulario);
            } else {
                $respuesta = "El archivo no se ha podido enviar debido a que su tamaño es mayor a 25 mb";
            }
            return $respuesta;
        }
    }
?>