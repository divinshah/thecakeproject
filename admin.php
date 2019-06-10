<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/adminStyle.css">
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
          <a href="blogAdmin.php">Cakes</a>
        </li>
		<br>
        <li class="active">
          <a href="listJobPostsAdmin.php">Orders</a>
        </li>
        <br>				
         <li class="active">
          <a href="faq/addFaq.php">FAQ</a>
        </li>
        <br>
         <li class="active">
          <a href="listfaqs_admin.php">Contact</a>
        </li> 
        <br>		
      </ul>
    </nav>
    </div>
</body>
</html>