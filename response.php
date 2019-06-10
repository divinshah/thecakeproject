
<!DOCTYPE html>
<html>
<head>
<?php require "header.php" ?>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="styles/order.css">
</head>
<body>


<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Load Composer's autoloader
require 'PHPMailer-master/vendor/autoload.php';

//class and database files    
require_once ('database/Database.php');
require_once ('class/Checkout.php');
 
    //print_r($_POST);
    //die();

//Margi added for click on submit button
//if(isset($_POST['confirm_order'])) {
          //$email_id = $_POST['email_id'];
$response_msg = false;
if(isset($_POST['confirm_order']))
{
    $response_msg = $_POST['confirm_order'];
    $email = $_POST['email_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
  
    echo "<h1 style='margin-top: 30px;text-align:center;'>" . "Thank You for Ordering!" . "</h1>";
    
    //refernce:https://stackoverflow.com/questions/14097897/how-to-fix-notice-undefined-index-in-php-form-action
    //Mail refernce: https://github.com/PHPMailer/PHPMailer
    // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com'; //smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'margi00patel@gmail.com';                     // SMTP username
    $mail->Password   = 'MrCake2019';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('margi00patel@gmail.com', 'Mr.Cake');
    $mail->addAddress($email, 'Customer');     // Add a recipient
   //$mail->addAddress($email_id, 'Joe User');  
    
    //print_r( $_POST );
    //die();
    
    
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Ordering Cake';
    $mail->Body    = 'Thank You ' . $firstname . " " . $lastname . ' for Ordering Cake! ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>

</body>
<?php include "footer.php" ?>
</html>

