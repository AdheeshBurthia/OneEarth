<div class="verification1">
    <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        
        require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
        require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
        require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';
        
        session_start();
        $email = $_SESSION["email"];
        $username = $_SESSION["username"];
        $subject = 'Email Verification Code';
        $code = $_SESSION["code"];
        $message = "Hi $email,<br><br>
    
                    We received your request for a verification code to use with your OneEarth account.<br>
                    Your verification code is: $code<br><br>
                    
                    If you didn't request this code, you can safely ignore this email. Someone else might have typed your email address by mistake.<br><br>
                    
                    Thanks,<br>
                    The OneEarth Team";
        
        $mail = new PHPMailer;
        $mail->isSMTP(); 
        $mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
        $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
        $mail->Port = 587; // TLS only
        $mail->SMTPSecure = 'tls'; // ssl is deprecated
        $mail->SMTPAuth = true;
        $mail->Username = 'oneearthnoreply@gmail.com'; // email
        $mail->Password = 'ckwoaykyvpchpttp'; // password
        $mail->setFrom('system@cksoftwares.com', 'OneEarth'); // From email and name
        $mail->addAddress($email, $username); // to email and name
        $mail->Subject = $subject;
        $mail->msgHTML($message); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
        $mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
        // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
        $mail->SMTPOptions = array(
                            'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                            )
                        );
        if(!$mail->send()){
            echo "Mailer Error: " . $mail->ErrorInfo;
        }else{
            echo "Message sent!";
        }
    ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .verification1{
            position: fixed;
            color: var(--body-color);
            overflow: hidden;
        }
    </style>
</head>
<body>
</body>
</html>