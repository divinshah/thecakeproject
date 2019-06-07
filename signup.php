<?php
include 'function.php';
//require_once 'database/Database.php';
//require_once 'class/Client.php';

/*$userName = $email = $password = "";

if(isset($_POST['submit']))
{
  $userName = $_POST['user'];
  $email    = $_POST['email'];
  $password = $_POST['pass'];
  $cpassword = $_POST['cpass'];

  $db = Database::getdb();
  $c = new Client();

  if($password == $cpassword){

       $hash = password_hash($password, PASSWORD_BCRYPT);
       $adduser = $c->addClients($userName,$email,$hash,$db);
       //$adduser = $c->addClients($userName,$email,$password,$db);
       $message = $userName."thank you for signup";
    }
  else{
     $message = "password not match";
   }
}*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<?php require_once 'header.php'; ?>
<div class="container" id="signup_section">
      <div class="d-flex justify-content-center h-100">
		<div class="card">
		  <div class="card-header">
            <h2 class="modal-title">SignUp</h2>
          </div>            
          <div class="card-body">
                <form action="#" method="post">
                   <?php echo display_error(); ?>
                   <div class="input-group form-group">
                     <div class="input-group-prepend">
                      <label>Username</label>
                     </div>
                      <input type="text" class="form-control" id="username" name="user" value="<?php echo $userName; ?>" required/>
                   </div>
                   <div class="input-group form-group">
                     <div class="input-group-prepend">                    
                      <label>Email ID</label>
                     </div>
                      <input type="Email" class="form-control" id="usermail" name="email" value="<?php echo $email; ?>" required/>
                   </div>
                   <div class="input-group form-group">
                     <div class="input-group-prepend">                    
                      <label>Password</label>
                     </div>
                      <input type="Password" class="form-control" id="password" name="pass" required/>
                   </div>
                   <div class="input-group form-group">
                     <div class="input-group-prepend">                   
                      <label>Confirm Password</label>
                     </div>
                      <input type="Password" class="form-control" id="cpassword" name="cpass" required/>
                   </div>
                   <div class="form-group">                    
                      <input type="submit" class="btn float-right login_btn" name="submit" value="SignUp">
                   </div>
                </form>
            </div>
            <div class="card-footer">            
                <div class="d-flex justify-content-center links">
					If have an account?<a href="login.php">Login</a>
				</div>
                <span style="color:white;">
              <?php
                if(isset($message)){
                    echo $message;
                }
            ?></span>
           </div>
         </div>
       </div>
  </div>

<?php require_once 'footer.php'; ?>
</body>
</html>