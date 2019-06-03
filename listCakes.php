<?php require "header.php";
require_once 'products/database.php';
require_once 'products/cakes.php';?>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<style>
  #cake-thumbnail{
      
      width: 200px;
  }

  </style>
<body>

<section id="intro" class="clearfix">
    <div class="container">
    </div>
  </section>
  <!--
  <div class="banner">
    <img src="images/banner.jpg" alt="banner image">
  </div>
-->
  <section>
   
   

                    <?php 
                    $dbcon = Database::getDb();
                    $b = new Cakes();
                    $mycake = $b->getAllCakes(Database::getDb());

                    $numberOfColumns = 4;
                    $bootstrapColWidth = 12 / $numberOfColumns ;

                    $arrayChunks = array_chunk($mycake, $numberOfColumns);
                    foreach($arrayChunks as $mycake) {
                        echo '<div class="row">';

                        foreach($mycake as $cake){
                          echo '<div class="col-md-'.$bootstrapColWidth.'">';
                          echo "
                          <div class='column'>
                            <div><strong><a href='productdetail.php?id=$cake->id'> $cake->cakeName </a></strong></div>
                            <div><img id='cake-thumbnail' src='products/uploads/$cake->cakeImage' /></div>
                          </div>
                          ";
                          echo '</div>';
                        }
                        echo '</div>';
                    }  
                    ?>

            
	
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