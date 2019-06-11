
<?php 
require "../header.php";
require_once 'database.php';
require_once 'cakes.php';

$id = $_GET['id'];
$dbcon = Database::getDb();
$b = new Cakes();
$mycake = $b->getCakeById($id, $dbcon);
 ?>
<link rel="stylesheet" href="../index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="styledivy.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="../styles/productdetail.css">
<body>

<div class="jumbotron">
    <div class="container cake-head">
        <h1>Great Choice !</h1>
    </div>
</div>

  <section>
  <div class="container">
  <div class="row">
    <div class="col-sm-6">

      <?php
        echo "<h2>  $mycake->cakeName </h2>".
             "<img class='img2' src='uploads/$mycake->cakeImage' alt='cake' width='250px'>".
             "Size <select>
                <option>8''</option>
                <option>12''</option>
              </select>
            <p>$mycake->cakeDesc </p><br/> " .
             
            //link for checkout page
        "<a href='../checkout.php?id=".$id."' class = 'btn-primary pull-right' style='padding:5px;margin:20px;'> " . "Buy " . "</a>" ;

      ?>
      </div>
      </div>
  </section>

</div> 



</body>

<?php include "../footer.php" ?>