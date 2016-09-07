<?php
    require("libs/class.phpmailer.php");
    

    function send($n){
        $mail = new PHPMailer();

        // Configuración de SMTP.
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";  
        $mail->Username = $_POST['mail'];
        $mail->Password = $_POST['password']; 
        $mail->Port = 465;

        $mail->From = $_POST['mail'];
        $mail->FromName = $_POST['name'];

        $mail->AddAddress($_POST['sendTo']);
        $mail->IsHTML(true); 
        $mail->Subject = $_POST['subject']; 
        $mail->Body = $_POST['message']; 
        for($i=1; $i<=$n; $i++){
            $sent = $mail->Send(); 
            
            
            if($sent){
                echo "<tr><td>".$i."</td><td>Success</td><td>".date('d-m-Y H:i:s', time())."</td></tr>";
            }else{
                echo "<tr><td>".$i."</td><td>Fail</td><td>".date('d-m-Y H:i:s', time())."</td></tr>";
            }   
        }
    }
?>

<html>
    <head>
        <title>MailBomber - Send</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <!-- Styles -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>

        <!-- Scripts -->
        <script src="assets/js/jquery-3.1.0.min.js"></script>
        <script src="assets/js/code.js"></script>
    </head>

    <body>
        <div class="col-md-12 no-float">
            <div class="page-header">
                <h1>MailBomber 1.0 <small>Connect a Gmail account and FIRE!</small></h1>
            </div>

            <div class="col-md-8 text-center no-float center-block mt50">
                <table class="table table-bordered bgwhite">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Status</th>
                            <th>Date/Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            send($_POST['numSend']);
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-md-12 center-block no-float mt50">
                <h2 class="text-center">
                    <a href=".">Go to Index</a>
                </h2>
            </div>
        </div>
    </body>
</html>