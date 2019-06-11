<!--orderDetails page(Margi Patel)-->
<!--<!DOCTYPE html>
<html>
<head>
    <title>Mr.Cake</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--margi added jquery link -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="cancel.js" type="text/javascript"></script>
    <?php  
    //Margi - Custom files
//echo "<link rel='stylesheet' href='order.css'>"; ?>
</head>-->

<!DOCTYPE html>
<html>
<head>
<?php require "header.php" ?>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="styles/order.css">
</head>
<body>
    <main id="order_main">
    <!--<h2 style="text-align:center;">Order</h2>-->
     <h4 style="text-align:center;">Your Order Details</h4>
         
    
        
<?php
        
        // require_once 'Database.php';
        //require_once 'Checkout.php';
        include 'database/Database.php';
        include 'class/Checkout.php';
        require_once './products/cakes.php'; 
      
        /*print_r($_POST);
        
        echo ($_POST['firstname']);
        die(); */
        
?>
   
<?php
        //defining variables
        $firstname = $lastname = $streetname = $city = $province = $postal_code = $email_id = $phone_no = $delivery_date = $order_id = "";
        $response_msg = "";
            if(isset($_POST['submitinfo']))
            {
               
               $firstname = $_POST['firstname'];
               $lastname = $_POST['lastname'];
               $streetname = $_POST['streetname'];
               $city = $_POST['city'];
               $province = $_POST['province'];
               $postal_code = $_POST['postal_code'];
               $email_id = $_POST['email_id'];
               $phone_no = $_POST['phone_no'];
               $delivery_date = $_POST['delivery_date'];
               $order_id = $_POST['order_id'];
               $cakeName = $_POST['cake_name']; //cake name
               $cakeDesc = $_POST['cake_desc']; //cake description

              
                //defined email variable to send email on response page
                  $email= "";
                  $email = $_POST['email_id']; 
                       
        
                //connection with database
               if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['streetname']) && !empty($_POST['city']) && !empty($_POST['province']) && !empty($_POST['postal_code']) && !empty($_POST['email_id']) && !empty($_POST['phone_no']) && !empty($_POST['delivery_date']))
               {

               
                   $dbcon = Database::getDb(); //get database connection
                   $cd = new Checkout(); //create new instance of object 
                   $c = $cd->addCustomerInfo($firstname, $lastname, $streetname, $city, $province, $postal_code, $email_id, $phone_no,                                  $delivery_date, $order_id, $dbcon); //call the method addEmployee
                   
                   //print_r($c);
                   //die();
                   //get id for inserted data
                   
                 
              /*     
                   echo //for Cake Details using bootstrap
                      " <div class='row'>" .
                       " <div class='col-sm-6'>" .
                       "<div class='card bg-light mb-3' style='max-width: 18rem;'>" .
                        "<div class='card-header'><h5>Item Details</h5></div>" .
                        "<div class='card-body'>" .
                        "<h6 class='card-title'>". ($_POST['cake_name']) ."</h6>" . //cake name
                        "<p class='card-text'>"  . $_POST['cake_desc']. "</p>" .    //cake description
                        "</div>" .
                        "</div> ";
                     */  
                  
                   /*echo 
                       
                       
                       "<div class='card' style='width: 18rem;'>" .
                        "<div class='card-body'> " .
                       
                       
                       "<div>" . 
                       //"<p>" ."Order Id: ".  print_r($order_id) ."</p>" .
                        "<p>" ."Order Id: ". $order_id =  $_POST['order_id'] ."</p>" .
                       "<p>" . "Name: " .($_POST['firstname']) . ($_POST['lastname']) ."</p>" .
                       "<p>" . "Address: " .($_POST['streetname']) . ", ". ($_POST['city']) .  " " .($_POST['province']). " - " .                           ($_POST['postal_code']) ."</p>" .
                       "<p>" ."Email Id: " .  ($_POST['email_id']) ."</p>" .
                       "<p>" ."Phone No.: " .  ($_POST['phone_no']) ."</p>" .
                       "<p>" ."Pick-Up Date: ".  ($_POST['delivery_date']) ."</p>" .
                       "<p>" ."Cake : " .  ($_POST['cake_name']) ."</p>" .
                       "<p>" . "Cake Dec" . ($_POST['cake_desc']) ."</p>".
                     
                       "</div>" .
                       
                       
                       //confrim order button
                       "<div class='text-center'>" .
                       "<form action='response.php' method='post'>".
                           // "<input type='hidden' name = 'id' value='$c->id' />" .
                            "<input type='hidden' name = 'firstname' value='$firstname' />" .
                            "<input type='hidden' name = 'lastname' value='$lastname' />" .
                            "<input type='hidden' name = 'email_id' value='$email' />" .
                            "<input type='submit' name='confirm_order' value='Confirm Order'  class = 'btn-primary pull-left'/>" .
                            "</form>" .
                       "</div>".
                       //cancel button
                       "<div class='text-center'>" .
                       " <a href='products/listCakes.php' class = 'btn-primary pull-right' style='padding:5px;margin:20px; display: inline-block;vertical-align: bottom;'> " . "Cancel " . "</a>" .
                       "</div>" 
                       ."</div>" .
                       " </div>" 
                       
                       ; */
                   
                   //Item and Customer Details 
                   
                   echo "<div class='row' style='padding:10px;'>" .
                        "<div class='col-sm-4 '> " .
                       "<div class='card bg-light mb-3' style='margin-left:70px;max-width:400px;'>" .
                        "<div class='card-header'><h5>Item Details</h5></div>" .
                        "<div class='card-body'>" .
                        "<h6 class='card-title'>". ($_POST['cake_name']) ."</h6>" . //cake name
                        "<p class='card-text'>"  . $_POST['cake_desc']. "</p>" .    //cake description
                        "</div>" .
                        "</div>" ."</div>" .
                        
                       "<div class='col-sm-8'> " .
                       "<div class='card bg-light mb-3' style='width: 700px;margin-right:70px;'>" .
                        "<div class='card-header'><h5>Customer Details</h5></div>" .
                        "<div class='card-body'>" .
                        //"<p>" ."Order Id: ".  print_r($order_id) ."</p>" .
                        "<h6 class='text-center'>" ."Order Id: ". $order_id =  $_POST['order_id'] ."</h6>" .
                       "<p>" . "Name: " .($_POST['firstname']) . " " . ($_POST['lastname']) ."</p>" .
                       "<p>" . "Address: " .($_POST['streetname']) . ", ". ($_POST['city']) .  "<br> " .($_POST['province']). " - " .                           ($_POST['postal_code']) ."</p>" .
                       "<p>" ."Email Id: " .  ($_POST['email_id']) ."</p>" .
                       "<p>" ."Phone No.: " .  ($_POST['phone_no']) ."</p>" .
                       "<p>" ."Pick-Up Date: ".  ($_POST['delivery_date']) ."</p>" .   //cake description
                       
                      /*
                       "<div class='text-center'>" .
                       "<form action='response.php' method='post'>".
                           // "<input type='hidden' name = 'id' value='$c->id' />" .
                            "<input type='hidden' name = 'firstname' value='$firstname' />" .
                            "<input type='hidden' name = 'lastname' value='$lastname' />" .
                            "<input type='hidden' name = 'email_id' value='$email' />" .
                            "<input type='submit' name='confirm_order' value='Confirm Order'  class = 'btn-primary pull-left'/>" .
                            "</form>" .
                       
                       "<form>" .
                       " <a href='products/listCakes.php' class = 'btn-primary pull-right' style='padding:5px;margin:20px; display: inline-block;vertical-align: bottom;'> " . "Cancel " . "</a>" .
                       "</form>".
                       "</div>" .
                       */
                       
                       // confirm order and cancel buttons
                       "<div class='modal-footer'>" .
                            "<form action='response.php' method='post'>".
                           // "<input type='hidden' name = 'id' value='$c->id' />" .
                            "<input type='hidden' name = 'firstname' value='$firstname' />" .
                            "<input type='hidden' name = 'lastname' value='$lastname' />" .
                            "<input type='hidden' name = 'email_id' value='$email' />" .
                            "<input type='submit' name='confirm_order' value='Confirm Order'  class = 'btn-primary pull-left' style='padding:5px;border-radius:3px;'/>" .
                            "</form>" .
                       
                       "<form>" .
                       " <a href='products/listCakes.php' class = 'btn-primary pull-right' style='padding:5px;margin:20px; display: inline-block;vertical-align: bottom;padding:5px;border-radius:3px;'> " . "Cancel " . "</a>" .
                       "</form>".
       
                        " </div>" .
                       
                        "</div>" .
                        "</div>" ."</div>" .
                       
                       "</div>"
                       ;
                   

                    if($c)
                     {
                        //$response_msg = "Thank You  $firstname $lastname For Ordering!  ";
                        //header('Location:  orderDetail.php');
                       // echo $id;echo ($_POST['firstname']);
                     } 
                    else 
                     {
                        echo "problem adding a customer";
                     } 

              }
              else
               {
                  echo "Please Fill All Required Fields";

               }
       
            }    
    
        
?>
       
    </main>
    
</body>
<?php include "footer.php" ?>
</html>