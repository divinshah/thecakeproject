<?php
require_once 'database.php';
require_once 'cakes.php';
include '../header.php';

$dbcon = Database::getDb();
$b = new Cakes();
$mycake = $b->getAllCakes(Database::getDb());

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cakes </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styledivy.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron">
    <div class="container cake-head">
        <h1>Range of Cakes</h1>
    </div>
</div>
<div class="container">
  <h4 style="font-family: 'pacifico';">List of our Delicacies</h4>
  
 

  <div class="row">
  <?php foreach($mycake as $cake){ ?>
    
    <div class="col-md-4 column productbox">
    <img <?php echo "src=uploads/$cake->cakeImage" ?> class="img-responsive card-img-top" width="300px">
    <div class="producttitle"><?php echo "<div><strong><a href='productdetail.php?id=$cake->id'> $cake->cakeName </strong></div>" ?></div>
    <div class="productprice"><div class="pull-right"><div class="btn btn-primary btn-sm" role="button">BUY</div></div></a><div class="pricetext">£8.95</div></div>
  </div>
  
  <?php } ?>
  </div>
 

</div>
  </body>
  </html>

  <?php include '../footer.php'; ?>
