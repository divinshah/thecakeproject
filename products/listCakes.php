<?php require "../header.php";
require_once 'database.php';
require_once 'cakes.php';?>
<link rel="stylesheet" href="../index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="style/cakelist.css">

<body>

<section id="intro" class="clearfix">
    <div class="container">
    </div>
  </section>
  <section>
   
   
                  <div id="container-box">
                    <?php 
                    $dbcon = Database::getDb();
                    $b = new Cakes();
                    $mycake = $b->getAllCakes(Database::getDb());

                    $numberOfColumns = 3;
                    $bootstrapColWidth = 12 / $numberOfColumns ;
                    
                    $arrayChunks = array_chunk($mycake, $numberOfColumns);
                    foreach($arrayChunks as $mycake) {
                        echo '<div class="row">';

                        foreach($mycake as $cake){
                          echo '<div class="col-md-'.$bootstrapColWidth.'">';
                          echo "
                          <div class='column'>
                            <div><strong><a href='productdetail.php?id=$cake->id'> $cake->cakeName </a></strong></div>
                            <div><img id='cake-thumbnail' src='uploads/$cake->cakeImage' /></div>
                          </div>
                          ";
                          echo '</div>';
                        }
                        echo '</div>';
                    }  

<<<<<<< HEAD:listCakes.php
  </section>
=======
                    ?>
                  </div>
            
	
  </section>

</div>



>>>>>>> a4faea013658d9f24383b194103b3ab0b5c02797:products/listCakes.php
</body>

<?php include "../footer.php" ?>