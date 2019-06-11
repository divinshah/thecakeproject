<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
 
  <link rel="stylesheet" href="styles/adminStyle.css">
</head>
<body>
<?php require_once 'header.php';?>
 <div class="wrapper">
  <nav id="sidebar" class="bg-secondary">
      <div class="sidebar-header ">
        <h2>Admin Panel</h2>
      </div>

      <ul class="list-unstyled components">
        <h3>Pages</h3>
        <li class="active">
          <a href="blogAdmin.php">Cake</a>
        </li>
        <li class="active">
          <a href="listJobPostsAdmin.php">Orders</a>
        </li> 
        <li class="active">
          <a href="#serviceSubmenu">Customer</a>
        </li>           
      </ul>
    </nav>
    
    <div class="container">
      <div class="text-center">
        <a href="blogAdminAdd.php" class="btn w-20 p-3 m-5">Add cake</a>
      </div>       
      <table class="table">
        <thead class="thead">
          <tr>
            <th>Title</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Publish Date</th>
            <th> CRUD Features</th>
          </tr>
        </thead>
        <tbody>
        <!--?php foreach($myblog as $blog){
          echo "" .  
          "<tr>" .
            "<td class='w-25'>" . $blog->title . "</td>" .
            "<td>" . $blog->first_name . "</td>" .
            "<td>" . $blog->last_name . "</td>" . 
            "<td>" . $blog->publish_date . "</td>" .
            "<td>" . 
              "<form action='blogAdminEdit.php' method='post'>" .
                "<input type='hidden' name='id' value='$blog->id' />" .
                "<input class='btn btn-primary float-left' type='submit' name='update' value='Update' />" .
              "</form>" .            
              "<form action='database/blog/deleteBlog.php' method='post'>" .
                "<input type='hidden' name='id' value='$blog->id' />" .
                "<input class='btn btn-danger float-right' type='submit' name='delete' value='Delete' />" .
              "</form>" .
            "</td>" .
          "</tr>";
        }
        ?-->
        </tbody>
      </table>
     </div>
    </div>
<?php require_once 'footer.php';?>
</body>
</html>