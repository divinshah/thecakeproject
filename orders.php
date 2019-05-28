<?php require "header.php" ?>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="styles/order.css">
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

<?php include "footer.php" ?>