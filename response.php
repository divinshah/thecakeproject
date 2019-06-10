


<?php
    
    require_once ('database/Database.php');
    require_once ('class/Checkout.php');
 
   /* $response_msg=""; //response message
    $firstname = $lastname = $streetname = $city = $province = $postal_code = $email_id = $phone_no = $delivery_date = $order_id = "";

            if(isset($_POST['confirm_order']))
            {
                 $response_msg = "Thank You  $firstname  $lastname for your Interest! We will response you soon on  $email_id";
            }
    */
    ?>

<!-- Response Message -->
<html>
<head></head>
    <body>
   <!--<div id="response_message">
       <?php
           echo $response_msg;
       ?>
    </div> -->
</body>
</html>


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

//Margi added for click on submit button
if(isset($_POST['confirm_order'])) {


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com'; //smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'margi00patel@gmail.com';                     // SMTP username
    $mail->Password   = 'Humber2019';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('margi00patel@gmail.com', 'Mr.Cake');
    $mail->addAddress('margi00patel@gmail.com', 'Joe User');     // Add a recipient
    
    print_r( $_POST );
    die();
    
    
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'Thank You for Ordering Cake! ' . $firstname . $lastname ;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>



<!--Margi added Form-->
<!DOCTYPE html>
<html>
 <head>
  <title>Send an Email on Form Submission using PHP with PHPMailer</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <div class="row">
    <div class="col-md-8" style="margin:0 auto; float:none;">
     <h3 align="center">Send an Email on Form Submission using PHP with PHPMailer</h3>
     <br />
     <?php //echo $error; ?>
     <form method="post">
    
     <!-- <div class="form-group" align="center">
       <input type="submit" name="confirm_order" value="Confirm Order" class="btn btn-info" />
      </div>-->
     </form>
    </div>
   </div>
  </div>
 </body>
</html>