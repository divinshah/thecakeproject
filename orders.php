<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Mr.Cake</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php  
    //Margi - Custom files
echo "<link rel='stylesheet' href='order.css'>"; ?>
</head>
<body>
    <main id="order_main">
    <h1>Order</h1>
     <h4>Your Order Details</h4>
         
              
            <form action='' method='get' class='form-horizontal'>
              <label>Order No.</label><br>
              <label>Name</label><br>
              <label>Phone</label><br>
              <label>Price</label><br>
             
            
             <!--<h5>Sub Total :</h5>
             <h5>HST 13% :</h5>
             <h5>Total :</h5> -->
             <input type='submit' name='order' value='Confirm Order' />
            </form>
        </main>
    
</body>

</html>