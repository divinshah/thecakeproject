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
    <h2 style="text-align:center;">Order</h1>
     <h4>Your Order Details</h4>
         
     <?php
        /*
     require_once ('Database.php');
     require_once ('Checkout.php');
        
     $dbcon = Database::getDb(); //to get database connection
     $o = new Checkout(); //create new instance of object
     $myorder =  $o->getAllCustomerWithDetails( $dbcon); //call method getAllJobPositions()
  
         //display all list of Job Posts 
                foreach($myorder as $order)
                {
                    echo "<p>" . $order->firstname . " " . $order->lastname ."</p>" .
                        "<p>". $order->streetname . $order->city . " " . $order->province ."</p>" .  
                        "<p>". $order->postal_code ."</p>" .  
                        "<p>". $order->email_id."</p>" .  
                        "<p>". $order->phone_no."</p>" .
                        "<p>". $order->order_id . "</p>". 
                        "<p>" . $order->delivery_date . "</p>" . "<hr>" .
                    
                    "<form action='' method='post' class='form-horizontal'>".
                                "<input type='hidden' name = 'id' value='$order->id' />" .
                                "<input type='submit' name='confirm_order' value='Confirm Order' />" .
                                "</form>" ;
                    
                 
                    
                  /*  "<form action='' method='post' class='form-horizontal'>".
                                "<input type='hidden' name = 'id' value='$order->id' class='id'/>" .
                                "<input type='submit' name='done' value='Cancel' class='cancel'/>" .
                                "</form>" ;*/
            /*    }
        */
        
    ?>
        
<?php
        
   // require_once 'Database.php';
    //require_once 'Checkout.php';
        include 'database/Database.php';
        include 'class/Checkout.php';
      
        /*print_r($_POST);
        
        echo ($_POST['firstname']);
        die(); */
        
        //$count = "";
        //$firstname = $_GET['firstname'];
        //$lastname = $_GET['lastname'];
        
    //get id
  /*  if(isset($_GET['id']) && $_GET['id']!=''){
        $id = $_GET['id'];

        $dbcon = Database::getDb();
        $d = new Checkout();
        $count = $d->getOrderById($id,$dbcon);
    
        //foreach($count as $position){
       //var_dump($count);
    }
         echo  "<div>" . "<h3>" . $count ->firstname ."</h3>" . "<br>" .
                                "<p>" . $count ->order_id . "</p>";
         */
        
         
        
       // echo ($_POST['firstname']);
        
        //echo ($_POST['order_id']);
?>
   
<?php
        
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


              
        
                //connection with database
               if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['streetname']) && !empty($_POST['city']) && !empty($_POST['province']) && !empty($_POST['postal_code']) && !empty($_POST['email_id']) && !empty($_POST['phone_no']) && !empty($_POST['delivery_date']))
               {

               
                   $dbcon = Database::getDb(); //get database connection
                   $cd = new Checkout(); //create new instance of object 
                   $c = $cd->addCustomerInfo($firstname, $lastname, $streetname, $city, $province, $postal_code, $email_id, $phone_no,                                  $delivery_date, $order_id, $dbcon); //call the method addEmployee
//get id for inserted data
                  //$id = $cd->lastInsertId(); //added
                    //echo $id;
                   echo "<div>" . 
                       //"<p>" ."Order Id: ".  print_r($order_id) ."</p>" .
                        "<p>" ."Order Id: ". $order_id =  $_POST['order_id'] ."</p>" .
                       "<p>" . "Name: " .($_POST['firstname']) . ($_POST['lastname']) ."</p>" .
                       "<p>" . "Address: " .($_POST['streetname']) . ", ". ($_POST['city']) .  " " .($_POST['province']). " - " .                           ($_POST['postal_code']) ."</p>" .
                       "<p>" ."Email Id: " .  ($_POST['email_id']) ."</p>" .
                       "<p>" ."Phone No.: " .  ($_POST['phone_no']) ."</p>" .
                       "<p>" ."Delivery Date: ".  ($_POST['delivery_date']) ."</p>" 
                       
                       
                       ."</div>" ;
                       
                      /* "<form action='orderDetail.php' method='post'>".
                           // "<input type='hidden' name = 'id' value='$c->id' />" .
                            "<input type='submit' name='confirm_order' value='Confirm Order'  />" .
                            "</form>" */
                   
                   //echo $order_id;

                    if($c)
                     {
                        $response_msg = "Thank You  $firstname $lastname For Ordering!  ";
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
        <div>
        <?php
           echo "<h5>" . $response_msg . "</h5>";
       ?>
        </div>

    </main>
    
</body>
<?php include "footer.php" ?>
</html>