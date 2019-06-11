<?php
$page_title = "UpdateFAQ";
require_once 'database/Database.php';
require_once 'Faq.php';
include "header.php"; 

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $dbcon = Database::getDb();
    $f = new Faq();
    $faq = $f->getFaqById($id, $dbcon);
}
if(isset($_POST['updFaq'])){
    $id= $_POST['fid'];
    $faq_question = $_POST['faq_question'];
    $faq_answer = $_POST['faq_answer'];
    $dbcon = Database::getDb();
	$f = new Faq();
    $count = $f->updateFaq($id, $faq_question, $faq_answer, $dbcon);
    if($count){
        header("Location: listfaqs.php");
    } else {
        echo  "problem Updating";
    }
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
          <a href="addfaqs.php">FAQ</a>
        </li>
        <br>
         <li class="active">
          <a href="listContactForm.php">Contact</a>
        </li> 
        <br>		
      </ul>
    </nav>
    
<div class="container">
    <br><br><br>
<form action="" method="post">
    <input type="hidden" name="fid" value="<?= $faq->id; ?>" />
   Question: <input type="text" name="faq_question" value="<?= $faq->faq_question; ?>" class="form-control" /><br/>
    Answer: <input type="text" name="faq_answer" value="<?= $faq->faq_answer; ?>" class="form-control"/><br />
    <input type="submit" name="updFaq" value="Update FAQ" class="btn btn-default">
	<a href="listfaqs.php" class="btn btn-default">Go Back</a>
</form>
</div>
</div>