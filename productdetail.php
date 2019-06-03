
<?php 
require "header.php";
require_once 'products/database.php';
require_once 'products/cakes.php';
$id = $_GET['id'];
$dbcon = Database::getDb();
$b = new Cakes();
$mycake = $b->getCakeById($id, $dbcon);
 ?>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="styles/productdetail.css">
<body>

  <div class="banner">
    <img src="images/banner.jpg" alt="banner image">
  </div>
  
  <section>
    <div class="clearfix">

      <?php
        echo "<h2>  $mycake->cakeName </h2>".
             "<img class='img2' src='products/uploads/$mycake->cakeImage' alt='cake' width='170' height='170'>".
             "Size <select>
                <option>8''</option>
                <option>12''</option>
              </select><br/>
            $mycake->cakeDesc <br/>
            <button>BUY</button>";

      ?>
      <!-- <img class="img2" src="images/redvelvet.jpeg" alt="cake" width="170" height="170">
      <h2>Red Velvet</h2>
      <h3>$40</h3>
            <select>
              <option>Size</option>
              <option>8"</option>
              <option>12"</option>
            </select><br/>
            description of cake <br/>
            <button>BUY</button> -->
    </div>

	
  </section>

  <div class="container-fluid">
  
    <div class="row">
    <div class="col-sm-4">img1</div>
    <div class="col-sm-4">img2</div>
    <div class="col-sm-4">img3</div>
	</div>
  
</div> 



</body>

<?php include "footer.php" ?>