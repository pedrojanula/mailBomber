<?php
    require("libs/class.phpmailer.php");
    echo "<h1>Sending, please wait...</h1>";
    send($_POST['numSend']);

    function send($n){
        $mail = new PHPMailer();

        // Configuración de SMTP.
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";   // SMTP a utilizar. Cambiar línea para usar otro host diferente.
        $mail->Username = $_POST['mail']; // Dirección de Gmail donde conectarse.
        $mail->Password = $_POST['password']; // Contraseña de Gmail
        $mail->Port = 465; // Puerto por el cual se conectará a la cuenta de Gmail. SMTP port (TLS): 587 -- SMTP port (SSL): 465

        // Configuración del encabezado.
        $mail->From = $_POST['mail'];
        $mail->FromName = $_POST['name'];

        // Resto de Configuración
        $mail->AddAddress($_POST['sendTo']); // Dirección donde se enviarán los e-mails.
        $mail->IsHTML(true); // Se enviará como HTML
        $mail->Subject = $_POST['subject']; // Asunto del Mensaje
        $mail->Body = $_POST['message']; // Cuerpo del Mensaje
        for($i=1; $i<=$n; $i++){
            $sent = $mail->Send(); // Envía el Correo
            
            // Verificación tras el envío.
            if($sent){
                echo "<h1>Mails Sent: ".$i;
            }else{
                echo "<h1>Error.</h1>";
                break;
            }   
        }
    }
?>