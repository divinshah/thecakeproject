<?php
include 'header.php';
require_once 'database.php';
require_once 'cakes.php';

$ID = null;
    
    if (!empty($_GET['id'])) {
        $ID = $_REQUEST['id'];
        $dbcon = Database::getDb();
        $c = new Cakes();
        $cake = $c->getCakeById($ID, $dbcon);
    }

    if(isset($_POST['update'])){
        $cakeName = $_POST['cakename'];
        $cakeDesc = $_POST['description'];
        $imgFile = $_FILES['cakeimage']['name'];
    $tmp_dir = $_FILES['cakeimage']['tmp_name'];
    $imgSize = $_FILES['cakeimage']['size'];
    
    $upload_dir = 'uploads/'; // upload directory
    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

    // rename uploading image to avoid duplication
    $cakePic = rand(1000,1000000).".".$imgExt;
    if(in_array($imgExt, $valid_extensions)){			
        // Check file size '5MB'
        if($imgSize < 5000000){
            move_uploaded_file($tmp_dir,$upload_dir.$cakePic);
        }
        else{
            echo "Sorry, your file is too large.";
        }
    }
    else{
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
    }
        

       
        $dbcon = Database::getDb();
        $l = new Cakes();
        $c = $l->updateCake($ID, $cakeName, $cakeDesc, $cakePic, $dbcon);
        if($c){
            header("Location: addcake.php");
        } else {
            echo  "problem updating";
        }
    }


    ?>
    <!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  #cake-thumbnail{
      
      width: 200px;
  }
  </style>
</head>
<body>
    <div class="container-fluid">

    <div class="row">
    <div class="col-md-4">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">                   
                    <label for="cakename">Cake Name</label>
                    <input type="text" class="form-control" name="cakename" value="<?php echo $cake->cakeName ?>" required>
                    <span class="error"><?php $name_error ?> </span>
                </div>
                <div class="form-group">                   
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" value="<?php echo $cake->cakeDesc ?>" required>
                </div>
               
                <div class="form-group">                   
                    <label for="cakeimage">Image</label>
                    <input type="file" class="custom-file" name="cakeimage" value="<?php echo $cake->cakeImage ?>" >
                    <!--<img id='cake-thumbnail' src='uploads/<?php // $cake->cakePic ?>' /> -->
                </div>
                <div class="form-group">                   
                    <input type="submit" class="btn btn-primary" name="update">
                </div>
            </form>
            </div>
            
    </div>
    </body>
    </html>

    <?php include 'footer.php';
    ?>