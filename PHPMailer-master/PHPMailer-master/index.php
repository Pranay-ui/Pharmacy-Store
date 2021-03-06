<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'akashdeep2000.admonu@gmail.com';                 // SMTP username
    $mail->Password = 'akash12345@#';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('noreply@poornima.org', 'priyanshu kumar');
    $mail->addAddress('2017pietcspriyanshu080@poornima.org', 'kumar priyanshu');     // Add a recipient
    $mail->addAddress('2017pietcsakash300@poornima.org');               // Name is optional
    $mail->addReplyTo('2017pietcspriyanshu080@poornima.org', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body hello body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   echo "<script>alert('Welcome user');
        window.location.href='home.php'</script>";
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
