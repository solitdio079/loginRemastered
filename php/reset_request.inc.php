<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;





if (isset($_POST["resetRequestSubmit"])) {

    /**
     * Create Tokens to validate and select proper user
     */
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://localhost:8080/loginRemastered/reset_password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    $userEmail = $_POST["email"];
    /**
     * Check if User email is in user class
     */
    include_once "../classes/usersview.class.php";
    $verify = new Usersview();
    $verify = $verify->takeOneUser($userEmail);
    if ($verify === false) {
        echo "Pas de compte avec cet Email!";
        exit();
    } else {
        /**
         * Remove Any existing process for the user
         */
        include_once "../classes/userscontrol.class.php";
        $reset = new Userscontrol();
        $reset->removepwdReset($userEmail);

        /**
         * Set pwdReset Instance
         */
        $set = new Userscontrol();
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        $set->createpwdReset($userEmail, $selector, $hashedToken, $expires);

        /**
         * Send Email
         */

        // Send with PHPMailer



        //Create an instance; passing `true` enables exceptions
        require "../vendor/autoload.php";
        $mail = new PHPMailer(true);


        try {
            //Server settings
            //$mail->SMTPDebug = 2;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'user@example.com';                     //SMTP username
            $mail->Password   = 'secret';                               //SMTP password
            $mail->SMTPSecure =   'ssl'; //PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;
            $mail->Username = 'phoenixd345@gmail.com';                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->Password = 'Jok3r@Gh9st#$';
            //Recipients
            $mail->setFrom('solitdio079@gmail.com', 'Djoko Keita');
            $mail->addAddress($userEmail);     //Add a recipient


            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Reset your password for My website!';
            $mail->Body    = '<p>We received a password reset request.The link to reset your password is below,if you did not make this request, you can ignore this email.</p>
    <p>Here is your password reset link: <br>
    <a href="' . $url . '">' . $url . '</a></p>
    ';
            $mail->AltBody =  '<p>We received a password reset request.The link to reset your password is below,if you did not make this request, you can ignore this email.</p>
    <p>Here is your password reset link: <br>
    <a href="' . $url . '">' . $url . '</a></p>
    ';

            $mail->send();
            echo 'Success!';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
} else {
    echo "Acces non autorise!";
}
