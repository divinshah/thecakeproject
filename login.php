<?php
session_start();
require_once 'database/Database.php';
require_once 'class/Client.php';

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
     
    header('location:logoutheader.php'); //if match then go to the home page
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
<link rel="stylesheet" href="login.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php require_once 'header.php';?>
<div class="container" id="signup_section">
    <div class="d-flex justify-content-center h-100">
		<div class="card">
		  <div class="card-header">
            <h2 class="modal-title">Login</h2> 
          </div>            
          <div class="card-body">
              <form action="#" method="post">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" id="username" name="user" required/>
                  </div>
                  <div class="form-group"> 
                    <label>Password</label>
                    <input type="Password" class="form-control" id="password" name="pass" required/>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn float-right login_btn" name="login" value="Login">
                  </div>
                </form> 
            </div>
            <div class="card-footer">            
                <div class="d-flex justify-content-center links">
					Don't have an account?<a href="signup.php">SignUp</a>
				</div>
                <span style="color:white;">
              <?php
                if(isset($error)){
                    echo $error;
                }
            ?></span>
           </div>
          </div>
        </div>
       </div>
<?php require_once 'footer.php';?>
</body>
</html>