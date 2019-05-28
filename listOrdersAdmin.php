<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Mr.Cake</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <?php
        require_once 'Database.php';
        require_once 'Order.php';

        $dbcon = Database::getDb();
        $o = new Order();
        $myorder =  $o->getAllOrders(Database::getDb());


        foreach($myorder as $order){
            echo "<div class='col-sm-3 col-md-4'>" . 
                    "<div id='box' >" .
                    "Customer Name: " . $order->name  . "<br>" .
                    "Contact Details: " . $order->contact_no .  "<br>" . 
                    "Email Id: " . $order->email_id . "<br>" .
                    "Order No.: " . $order->order_no . "<br>" .
                    "Price.: " . $order->price . "<br>" .
                    "<form action='deleteOrderAdmin.php' method='post' class='form-horizontal'>".
                    "<input type='hidden' name = 'id' value='$order->id' />" .
                    "<input type='submit' name='delete' value='Delete Order' />" .
                    "</form>" .
                    "</div>".
                  "</div>";

        }

?>
    
         <table class="table">
            <thead class="thead-dark">
             <tr>
              <th>Order No.</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Price</th>
             </tr>
            </thead>
            <tbody>
            <form action='' method='get' class='form-horizontal'>
             
             <input type='submit' name='checkout' value='Check Out' />
            </form>
         </tbody>
        </table>
    
</body>

</html>