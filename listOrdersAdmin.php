
<!--List of Employees Page at Admin Side (list of Employees) -->

<!DOCTYPE html>
<html>
<head>
<?php require "header.php" ?>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<!--Margi added JS Script-->    
    
<!--<script type="text/javascript">
var $jj = jQuery.noConflict();
$jj(document).ready(function () {
    $jj('.delivery-confirm').on('click', function () {
        var _this = $jj(this);
        $jj.confirm({
            title: 'Confirm!',
            content: 'Are you sure? Once confirmed, you cannot dispute this transaction.',
            buttons: {
                confirm: function () {
                    _this.closest('form').submit();$("#confirmbutton").prop("disabled",true);
                },
                cancel: function () {

                }
            }
        });
    });
    
});
</script>-->
    
</head>

<body class="container" style="padding-left: 0px;
padding-right: 0px; margin: 0 auto; width: 1200px;">
 
 <!-- main -->
 <main>
  <div class="wrapper">
   
    <div class="container">
      <h1 class="text-center">Orders</h1>
        
        <table class="table">
            <thead class="thead-dark">
             <tr>
              <th>Employee Name</th>
              <!--<th>Order Detail</th>-->
              <th>Address</th>
              <!--<th>Skill Requirements</th>
              <th>Job Requirements</th> -->
              <!--<th>Description</th> -->
              <th>Contact Info.</th>
              <th>Pick-Up Date</th>
              <th>Order Id</th>     
              <th> Action</th>
             </tr>
            </thead>
            <tbody>   

        <?php
           
        require_once ('database/Database.php');
        require_once ('class/Checkout.php');
   //require_once 'Order.php';

            $dbcon = Database::getDb();
            $cd = new Checkout();
            $mycust =  $cd->getAllCustomerWithDetails(Database::getDb()); //

            //display all list of employee
            foreach($mycust as $cutomerdetail)
            {
                echo "" .  
                        "<tr>" .

                            //echo "<ul class='list-group'>" .
                            //"<li class='list-group-item'>" .  
                            "<td class='w-18'>" . $cutomerdetail->firstname . " " . $cutomerdetail->lastname . "</td>" .
                                        // $employee->job_id  . 
                            //"<td>" . $cutomerdetail->job_title . "</td>" .
                            "<td>" . $cutomerdetail->streetname . ", " . $cutomerdetail->city . ", " . $cutomerdetail->province . ", " . 
                                        $cutomerdetail->postal_code . "</td>".
                            "<td>" . $cutomerdetail->email_id . ", " . "<br>" . $cutomerdetail->phone_no . "</td>" .
                            "<td>" . $cutomerdetail->delivery_date . "</td>".
                            "<td>" . $cutomerdetail->order_id . "</td>".
                    
                            "<td>" .
                                     
                            "<form action='deleteOrderAdmin.php' method='post'>".
                            "<input type='hidden' name = 'id' value='$cutomerdetail->id' />" .
                            "<input type='submit' name='delete' value='Completed'  class='btn btn-primary'/>" .
                            "</form>" .
                            "<br>" .
                            //"<form action='' method='post'>".
                            //"<input type='hidden' name = 'id' value='$cutomerdetail->id' />" .
                            //"<input type='submit' name='delete' value='Processing'  class='btn btn-primary'/>" .
                            //"</form>" .

                            //"</li>" .
                            // "</ul>";
                            "</td>" . 
                    
                   
                    //margi trying to hide row
                    
                  /*  "<form action='' method='post' class='delivery-confirm'>" .
                    "<input type='hidden' name='id' value='$cutomerdetail->id'' > " .
                    "<input type='button' value='CONFIRM' class='delivery-confirm' id='confirmbutton' 
                    <?php echo $cutomerdetail->id ? 'disabled' : ''; ?>/>" .
                    "</form>" .
                    */
                    
                    "</tr>";

            }

        ?>

        
        </tbody>
        </table>
    </div>
   </div>
  </main>
  <!--footer-->
<?php include "footer.php" ?>
</body>
</html>
