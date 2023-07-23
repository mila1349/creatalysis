<?php
   use PHPMailer\PHPMailer\PHPMailer;

   require_once 'PHPMailer.php';
   require_once 'Exception.php';
   require_once 'SMTP.php';
   
    $mail = new PHPMailer(true);
    $mail-> isSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->SMTPDebug = 1;

    echo 'hfkhk';
    try {
        $mail->Host = "smtp.example.com";
        $mail->SMTPAuth = true;
        $mail->Username = 'innekamila@gmail.com';
        $mail->Password = 'inne134907';
        // $mail->SMTPAuth = true;
        // $mail->Username = 'smtp_username';
        // $mail->Password = 'smtp_password';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('innekamila@gmail.com');
        $mail->addAddress('milarozi1349@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'message received';
        $mail->Body = '<h3>Name: $name <br> Email: $email <br> Message: $message';

        $mail->send();
        $alert = 'success';
        echo $alert;
    }catch (Exception $e) {
        $alert = 'error'.$e;
        echo $alert;
    }

//     // if(isset($_POST['submit'])){
//     //     $name = $_POST['fName'] + $_POST['lName'];
//     //     $email = $_POST['email'];
//     //     $phone = $_POST['email'];
//     //     $message = $_POST['message'];

//     //     debug_to_console($name);
//     // }

// // the message
// $msg = "First line of text\nSecond line of text";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// // send email
// mail("milaozi1349@gmail.com","My subject",$msg);


?>