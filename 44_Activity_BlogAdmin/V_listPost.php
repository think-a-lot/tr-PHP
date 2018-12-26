<?php
  session_start();
  require_once("M_user.php");
  $user = new User;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Post List - Blog Admin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <style>
    .bg-primary{ background-color: #008cd7 !important; }
    img{ object-fit: cover; }
    .navbar-brand { font-size:2.3rem; }
    .navbar-brand, .nav-link { color: #fff !important; }
    .navbar { box-shadow: 0 1px 10px #555 }
    .fa-user-times:before{ content: "\f235"; }
    .h3{ font-weight: 100 !important; }    
  </style>
</head>

<body>
 
<!-- 1st row (nav) -->
  <nav class="navbar navbar-expand-sm navbar-light bg-primary text-white">
    <div class="container">
      <a class="navbar-brand" href="#">Blogen</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Users</a>
          </li>
        </ul>
      </div>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-end mr-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> Welcome Aleksey
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Setting</a>
            </div>
          </li>
          <li class="nav-item">
           <a class="nav-link disabled " href="#"><i class="fas fa-user-times"></i> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
<!-- 2nd row -->
  <div class="row bg-primary">
    <div class="container">
      <h2 class="text-white p-4 display-4"><i class="fas fa-pencil-alt"></i> Post List</h2>
    </div>
  </div>
  
<!-- 3rd row -->
  <div class="row p-4 bg-light">
    <div class="container">
      <form class="form-inline justify-content-end">
        <div class="input-group rounded">
          <input class="form-control" type="search" name="" placeholder="Search Posts ...">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white border-0 rounded-right">Search</span>
            </div>
        </div>
      </form>        
    </div>
  </div>
  
<!-- 4th row -->
  <div class="row pl-5 pr-5 pb-5">
    <div class="container pt-4">
          
      <table class="table table-striped">
        <thead class="table-dark">
          <tr class="">
            <th>Date Posted</th>
            <th>Title</th>
            <th>Category</th>
            <th>Link</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $result = $user->getLatestPosts();
            foreach($result as $key => $row){
              echo "<tr>";
              echo "<td>".$row['postDate']."</td>";
              echo "<td>".$row['postTitle']."</td>";
              echo "<td>".$row['postCategory']."</td>";
              echo '<td><a href=""><i class="fas fa-angle-double-right"></i> Details</a></td>';
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  
  <div class="row pt-0 pb-5">
    <nav class="container" aria-label="...">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#!" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#!">1</a></li>
        <li class="page-item active">
          <a class="page-link" href="#!">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#!">3</a></li>
        <li class="page-item"><a class="page-link" href="#!">...</a></li>
        <li class="page-item">
          <a class="page-link" href="#!">Next</a>
        </li>
      </ul>
    </nav>
  </div>
  
  <footer class="row bg-dark p-5 justify-content-center">
    <p class="text-white">Copyright <i class="far fa-copyright"></i> Admin UI</p>
  </footer>
  
</body>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>
