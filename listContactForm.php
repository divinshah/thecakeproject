<?php
$page_title = "Admin ListContactForm";
require_once 'database/Database.php';
require_once 'ContactForm.php';
require_once 'header.php'; 

$dbcon = Database::getDb();
$t = new ContactForm();
$cf =  $t->getAllContactForm(Database::getDb());
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
    
<!--Content-->
<main id="main_searchFaqAdmin">
        <div class="container">
            <div>
			 <ul class="list-group list-group-flush">
                <?php foreach($cf as $cfs){ ?>
                 
                 <li class="list-group-item"><?php echo "<a href='detailContactForm.php?id=$cfs->id'>" .  $cfs->f_name  . $cfs->l_name  . "</a>"?></li> 

		   
                    <form action='deleteContactForm.php' method='post'>
					
                        <input type='hidden' value='<?= $cfs->id; ?>' name='id' />
                        <input type='submit' value='Delete' name='delete' class="btn btn-danger" />
                    </form>
					</ul>
					
					</br></br>
					
                <?php } ?>
            </div>
        </div>

</main>
</div>
</body>
</html>
<?php require_once 'footer.php';