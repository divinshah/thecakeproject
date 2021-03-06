<!--checkout page(Margi Patel)-->
<!--
<!DOCTYPE html>
<html>
<head>
    <title>Mr.Cake</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php  
    //Margi - Custom files
//echo "<link rel='stylesheet' href='order.css'>"; ?> -->


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
<div class="jumbotron">
    <div class="container cake-head">
        <h1>Cake checkout</h1>
    </div>
</div>
    <main id="order_main">
    <h2 style="text-align:center;">Mr.Cake CheckOut</h2>
    
    <div>
     <!--<h4>Your Order Details</h4>-->
    </div>
        
    <div>
     <h4>Fill the Pickup Details</h4>
       
        
       
    <?php

        require_once ('database/Database.php');
        require_once ('class/Checkout.php');
        require_once './products/cakes.php'; //for cake id
       // require_once ($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/Employee_client.php');

       //defining variables
        $firstname = $lastname = $streetname = $city = $province = $postal_code = $email_id = $phone_no = $delivery_date = $order_id = "";
    
            // Order detail:
            //if(isset($order_id)){
                $id = $_GET['id'];
                $dbcon = Database::getDb();
                $b = new Cakes();
                $mycake = $b->getCakeById($id, $dbcon);
           // echo $_POST['order_id'];
            //}
            
            if(isset($_POST['confirm_order']))
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

            //VALIDATION
            //function for streetname, city, province, availability
                function text_validation($value)
                {
                    if($value == "")
                    {
                        return "Please enter value";
                    }
                    else
                    {
                        return "";
                    }
                }

            //function for First Name, Last Name, Postal Code, Phone No., Email Id
                function validate($value, $pattern = "")
                {
                    if($value == "")
                        {
                            return "Please enter value";
                        }
                    elseif(!preg_match($pattern, $value))
                        {
                            return "Please enter value properly";
                        }
                    else
                        {
                            return "";
                        }
                }
                //for First Name
                $patternfname = "/^[a-zA-Z ]{2,30}$/";
                $fname_err = validate($firstname, $patternfname);    

                //for Last Name
                $patternlname = "/^[a-zA-Z ]{2,30}$/";
                $lname_err = validate($lastname, $patternlname);   

                //for Street Name
                $streetname_err = text_validation($streetname);

                //for City 
                $city_err = text_validation($city);

                //for Province
                $province_err = text_validation($province);

                //for Postal Code
                $patternPC = "/\w\d\w\s\d\w\d/";
                $pc_err = validate($postal_code,$patternPC);

                //for Phone No.
                $patternPhNo = "/\d{10}/"; 
                $ph_err = validate($phone_no,$patternPhNo);

                //for Email Id
                $patternEmail = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/"; //reference :https://stackoverflow.com/questions/940577/javascript-regular-expression-email-validation?lq=1
                $email_err = validate($email_id,$patternEmail);

                //pick up date
                $delivery_date_err = text_validation($delivery_date);


                    if($c)
                     {
                        //$response_msg = "Thank You  $firstname $lastname for your Interest! We will response you soon on  $email_id";
                        header('Location:  orderDetail.php');
                        echo $id;
                     } 
                    else 
                     {
                        echo "problem adding a customer";
                     } 

        
            }    
    
    ?>

<!--Form for an Checkout --> 
  <form action="orderDetail.php" method="post" class="form-horizontal">
    
    <!--First Name-->
    <div class="form-group">
        <label class="control-label col-sm-2" for="firstname"> First Name:</label>
        <div class="col-sm-6">
        <input type="textbox" name="firstname" class="form-control" value="<?php
                            if(isset($firstname)){
                                echo $firstname;
                            }
                      ?>" class="form-control" style="border:1px solid gray;"/>
         </div>   
            <span style="color:red;">
            <?php
                if(isset($fname_err)){
                    echo $fname_err;
                }
                ?>
            </span><br /> 
    </div>
      
    <!--Last Name-->  
    <div class="form-group">
        <label class="control-label col-sm-2" for="lastname"> Last Name:</label>
        <div class="col-sm-6">
        <input type="textbox" name="lastname" class="form-control" value="<?php
                            if(isset($lastname)){
                                echo $lastname;
                            }
                      ?>" class="form-control" style="border:1px solid gray;"/>
        </div>   
            <span style="color:red;">
            <?php
                if(isset($lname_err)){
                    echo $lname_err;
                }
                ?>
            </span><br /> 
    </div>
    
    <!--Street Name-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="streetname">Street Name:</label>
      <div class="col-sm-6">    
      <input type="text" name="streetname" value="<?php
                            if(isset($streetname)){
                                    echo $streetname;
                            }
                      ?>" class="form-control" style="border:1px solid gray;"/>
      </div>      
            <span style="color:red;">
            <?php 
                if(isset($streetname_err)){
                    echo $streetname_err;
                }
                ?>
            </span><br />
    </div>
     
    <!--City-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="city">City:</label>
      <div class="col-sm-6">        
      <input type="text" name="city"  class="form-control" value="<?php
                            if(isset($city)){
                                    echo $city;
                            }
                      ?>" class="form-control" style="border:1px solid gray;"/>
      </div>    
            <span style="color:red;">
            <?php 
                if(isset($city_err)){
                    echo $city_err;
                }
                ?>
            </span><br />
    </div>
      
    <!--Province--> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="province">Province:</label>
      <div class="col-sm-6">            
      <input type="text" name="province" class="form-control" value="<?php
                            if(isset($province)){
                                    echo $province;
                            }
                      ?>" class="form-control" style="border:1px solid gray;"/>
        </div>      
            <span style="color:red;">
            <?php 
                if(isset($province_err)){
                    echo $province_err;
                }
                ?>
            </span><br />
    </div>
    
    <!--Postal Code--> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="postal_code">Postal Code:</label>
      <div class="col-sm-6">               
      <input type="text" name="postal_code" class="form-control" value="<?php
                            if(isset($postal_code)){
                                    echo $postal_code;
                            }
                      ?>" class="form-control" style="border:1px solid gray;"/>&nbsp;&nbsp;(Canada Only)&nbsp;(E.G. M4B 8J6)
      </div>        
            <span style="color:red;">
            <?php 
                if(isset($pc_err)){
                    echo $pc_err;
                }
                ?>
            </span><br />
    </div>
    
    <!--Email Id--> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="email_id">Email Id:</label>
      <div class="col-sm-6">       
      <input type="text" name="email_id" class="form-control" value="<?php
                            if(isset($email_id)){
                                echo $email_id;
            }
                      ?>" class="form-control" style="border:1px solid gray;"/>&nbsp;&nbsp;(e.g. me@example.com)
        </div>     
            <span style="color:red;">
            <?php 
                if(isset($email_err)){
                    echo $email_err;
                }
                ?>
            </span><br />
    </div>
    
    <!--Phone No--> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone_no">Phone No:</label>
      <div class="col-sm-6">      
      <input type="text" name="phone_no" class="form-control" value="<?php
                            if(isset($phone_no)){
                                echo $phone_no;
                            }
                      ?>" class="form-control" style="border:1px solid gray;"/>&nbsp;&nbsp;(e.g. 4171232757)
      </div>      
            <span style="color:red;">
            <?php
                if(isset($ph_err)){
                    echo $ph_err;
                }
                ?>
            </span><br />
    </div>
    
    <!--Pick Up Date--> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="delivery_date">Pick-Up Date:</label>
      <div class="col-sm-6">     
      <input type="date" name="delivery_date" class="form-control" value="<?php
                            if(isset($delivery_date)){
                                    echo $delivery_date;
                            }
                      ?>" class="form-control" style="border:1px solid gray;"/>
        </div>     
            <span style="color:red;">
            <?php 
                if(isset($delivery_date_err)){
                    echo $delivery_date_err;
                }
                ?>
            </span><br />
    </div>
    
   <br>
      
      <!--Order Id-->
      <div class="form-group">
        <input type="hidden" name="order_id" value="<?php
                            //if(isset($order_id)){
                                echo $order_id = uniqid();
                           // echo $_POST['order_id'];
                            //}
                      ?>" /> 
    </div>
      
      
    <!--cake id and Details(Cake Name, Cake Description)-->
    <div>
        <input type="hidden" name="cake_name" value="<?=$mycake->cakeName?>" />
        <input type="hidden" name="cake_img" value="<?=$mycake->cakeImage?>" />
        <input type="hidden" name="cake_desc" value="<?=$mycake->cakeDesc?>" />
        
    </div>
 
   <!--Submit Button-->
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class='btn btn-primary' name="submitinfo" value="Submit">Submit</button>
      </div>
    </div>
    
  </form>
   
</div>
              
            
</main>
    
</body>

<?php include "footer.php" ?>
</html>