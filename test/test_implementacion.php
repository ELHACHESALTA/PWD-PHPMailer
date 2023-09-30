<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../util/class/Exception.php';
    require '../util/class/PHPMailer.php';
    require '../util/class/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '';                                     //correo
        $mail->Password   = '';                                     //contraseña
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('mail@gmail.com', 'nombre'); // usuario que envia
        $mail->addAddress('mail@gmail.com');     // mail que recibe 

        //Attachments
        // esto se utiliza para enviar archivos
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Asunto de la prueba del correo enviado';
        $mail->Body    = 'Este es el cuerpo del mail enviado para probar el PHPMailer';
        // mensaje alternativo
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'El mensaje se ha enviado con exito!';
    } catch (Exception $e) {
        echo "El mensaje no se ha podido enviar. El error es: {$mail->ErrorInfo}";
    }
?>