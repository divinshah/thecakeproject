<?php
require 'database.php';
require 'cakes.php';
include '../header.php';

$dbcon = Database::getDb();
$b = new Cakes();
$mycake = $b->getAllCakes(Database::getDb());

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
    <body>
<div class="row">
<div class="container">
  <h2>Our Delicacies</h2>
  <div class="card img-fluid" style="width:500px">
    <img class="card-img-top" src="uploads/3664.jpg" alt="Card image" style="width:100%">
    <div class="card-img-overlay">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. Some example text some example text. Some example text some example text. Some example text some example text.</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <br>
</div>
</div>
        
        
        </body>