<?php
$page_title = "ListFAQ";
require_once 'database/Database.php';
require_once 'Faq.php';
include 'header.php';

$dbcon = Database::getDb();
$t = new Faq();
$myfaq =  $t->getAllFaq(Database::getDb());

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
          <a href="addContactForm.php">Contact</a>
        </li> 
        <br>		
      </ul>
    </nav>
        
        <div class="container">
		<h2>FAQ List</h2>
            <div>
	 <ul class="list-group">
           <?php foreach($myfaq as $faqs){ ?>
                 
           <li class="list-group-item">Question: <?= $faqs->faq_question ?> </li>
           <li class="list-group-item">Answer: <?= $faqs->faq_answer ?></li>
           
		<form action='updateFaq.php' method='post'>
          <input type='hidden' value='<?= $faqs->id; ?>' name='id'/>
          <input type='submit' value='Update' name='update'  class="btn btn-success"/>
        </form>
		   
        <form action='deleteFaq.php' method='post'>
          <input type='hidden' value='<?= $faqs->id; ?>' name='id' />
          <input type='submit' value='Delete' name='delete' class="btn btn-danger" />
        </form>
	</ul>
					
	</br>
	</br>
					
         <?php } ?>
    </div>
  <a href="addFaq.php" class="btn btn-default">Add new</a>
 </div>

</div>
<?php include_once 'adminfooter.php' ?>