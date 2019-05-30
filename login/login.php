<?php
require_once '../database/Database.php';
require_once '../class/Client.php';

if(isset($_POST['login']))
{
  $user = $_POST['user'];
  $pass = $_POST['pass'];

   


  $db = Database::getdb();
  $c = new Client();
  $n = $c->getAllClientsLogin($user,$pass,$db);
  //checking for user name and password already exits or not
  if($row = $n){
     $_SESSION['Username']= $user ;
     
    header('location:../index.php'); //if match then go to the home page
      }
  else{
    $error = "Your username or password does not match";//if not then go to the registration page
     }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php require_once '../header.php';?>
<main id="login_section">
            <h2 class="modal-title">Login</h2>  
            <div class="modal-body">
                <form action="#" method="post">
                   <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control col-sm-8" id="username" name="user" required/>
                      <label>Password</label>
                      <input type="Password" class="form-control col-sm-8" id="password" name="pass" required/>
                      <button type="submit" class="btn btn-primary" name="login">Login</button>
                   </div>
                </form>               
                <label>If you don't have account please SignUp</label>
                <div class="btn btn-primary btn-sm"><a href="signup.php" style="color:white;">SignUp</a></div>
                <span style="color:red;">
              <?php
                if(isset($error)){
                    echo $error;
                }
            ?></span>
            </div>
</main>
<?php require_once '../footer.php';?>
</body>
</html>