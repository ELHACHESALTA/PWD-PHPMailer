<?php
    use PHPMailer\PHPMailer\PHPMailer;
    include_once '../configuracion.php';

    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'reclamoventas@gmail.com';                                     //correo
    $mail->Password   = 'aveevgtlmqjcspbf';                                     //contraseña
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('reclamoventas@gmail.com', 'nombre'); // usuario que envía
    $mail->addAddress('reclamoventas@gmail.com');     // mail que recibe 

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

    if($mail->send()){
        echo 'El mensaje se ha enviado con exito!';
    } else {
        echo "El mensaje no se ha podido enviar. El error es: {$mail->ErrorInfo}";
    }
?>