<?php
require_once 'database/Database.php';
require_once 'class/Client.php';

$userName = $email = $password = "";

if(isset($_POST['submit']))
{
  $userName = $_POST['user'];
  $email    = $_POST['email'];
  $password = $_POST['pass'];
  $cpassword = $_POST['cpass'];

  $db = Database::getdb();
  $c = new Client();

  if($password == $cpassword){

       //$hash = password_hash($password, PASSWORD_DEFAULT);
       $adduser = $c->addClients($userName,$email,$password,$db);
       $message = $userName."thank you for signup";
    }
  else{
     $message = "password not match";
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
<?php require_once 'header.php'; ?>
<main id="signup_section">
            <h2 class="modal-title">SignUp</h2>  
            <div class="modal-body">
                <form action="#" method="post">
                   <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" id="username" name="user" required/>
                      <label>Email ID</label>
                      <input type="Email" class="form-control" id="usermail" name="email" required/>
                      <label>Password</label>
                      <input type="Password" class="form-control" id="password" name="pass" required/>
                      <label>Confirm Password</label>
                      <input type="Password" class="form-control" id="cpassword" name="cpass" required/>
                      <button type="submit" class="btn btn-primary" name="submit">SignUp</button>
                   </div>
                </form>               
                <label>If you have account please Login</label>
                <div class="btn btn-primary btn-sm"><a href="login.php" style="color:white;">Login</a></div>
                <span style="color:red;">
              <?php
                if(isset($message)){
                    echo $message;
                }
            ?></span>
            </div>
</main>
<?php require_once 'footer.php'; ?>
</body>
</html>