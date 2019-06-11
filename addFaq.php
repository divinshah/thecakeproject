<?php
$page_title = "AddFAQ";
require_once 'database/Database.php';
require_once 'Faq.php';
include 'header.php';

// define variables and set to empty values
$queErr = $ansErr = "";
$question = $answer = "";

// Only admin will be able to make some changes!

 if(isset($_POST['question'])){
       $faq_question = $_POST['question'];
	   $faq_answer = $_POST['answer'];
        
        $db = Database::getDb();
        $c = new Faq();
        $my_data = $c->addFaq($faq_question, $faq_answer, $db);
 }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="adminStyle.css">
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

<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="fas fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
  </nav>
 <div class="wrapper">
  <nav id="sidebar" class="bg-secondary">
      <div class="sidebar-header ">
        <h2>Admin Panel</h2>
      </div>

      <ul class="list-unstyled components">
        <li class="active">
          <a href="products/addcake.php">Cakes</a>
        </li>
		<br>
        <li class="active">
          <a href="../listOrdersAdmin.php">Orders</a>
        </li>
        <br>				
         <li class="active">
          <a href="listfaqs.php">FAQ</a>
        </li>
        <br>
         <li class="active">
          <a href="addContactForm.php">Contact</a>
        </li> 
        <br>		
      </ul>
    </nav>
<div class="container-fluid">
    <h3>Add new FAQ</h3>
<form action="#" method="post">
	<label for="faq_question">Question:</label>
	<textarea type="text" name="question" value="<?php echo $question;?>"></textarea>
	<br/>
	<label for="faq_question">Answer:</label>
	<textarea type="text" name="answer" value="<?php echo $answer;?>"></textarea>
	<br/>

	<input type="submit" name="addfaq" value="Add Faq">
</form>
<a href="listfaqs.php">Go to the list</a>
</div>
</div>
</body>
</html>