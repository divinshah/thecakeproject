<?php require "header.php" ?>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<body>

<div class="jumbotron">
<div class="container cake-head text-center">
        <h1 style="font-family: 'pacifico';">Welcome to our Cake Shop</h1>
    </div>   
    
</div>

  <section>
   
   
   
   <p class="tagline">
   <i class="fas fa-quote-left fa-2x"></i>
   Cakes are special. Every birthday, every celebration ends <br/>
   with something sweet, a cake, and people remember. <br/> 
   It's all about the memories.
    <i class="fas fa-quote-right fa-2x"></i>
   </p>
	
  </section>

  <!-- Cakes list -->
  <?php
require_once 'products/database.php';
require_once 'products/cakes.php';

$dbcon = Database::getDb();
$b = new Cakes();
$mycake = $b->getAllCakes(Database::getDb());


?>
  <div class="container-fluid">
  <div class="row">
  <?php foreach($mycake as $cake){ ?>
    
    <div class="col-md-4 column productbox">
    <img <?php echo "src=products/uploads/$cake->cakeImage" ?> class="img-responsive card-img-top" width="300px">
    <div class="producttitle"><?php echo $cake->cakeName ?></div>
    <div class="productprice"><div class="pull-right"><a href="products/viewcakes.php" class="btn btn-primary btn-sm" role="button">BUY</a></div></div>
  </div>
  
  <?php } ?>
  </div>
   
  
</div>



</body>

<?php include "footer.php" ?>