<?php
  include "_header.php";
  require_once "M_User.php";
  $user = new User;
?>

<!-- 2nd row -->
  <div class="row bg-primary">
    <div class="container">
      <h2 class="text-white p-4 display-4"><i class="fas fa-cog"></i> Dashboard</h2>
    </div>
  </div>
  
<!-- 3rd row -->
  <div class="row p-4 bg-light">
    <div class="container">
     
      <div class="col-3 d-inline-block">
        <a href="V_addPost.php">
          <button class="btn btn-primary w-100 p-2"><i class="fas fa-plus"></i> Add Post</button>
        </a>
      </div>
      <div class="col-3 d-inline-block">
        <a href="V_addCategory.php">
          <button class="btn btn-success w-100 p-2"><i class="fas fa-plus"></i> Add Category</button>
        </a>
      </div>
      <div class="col-3 d-inline-block">
        <a href="V_addUser.php">
          <button class="btn btn-warning w-100 p-2 text-white"><i class="fas fa-plus"></i> Add User</button>
        </a>
      </div>
      
    </div>
  </div>
  
<!-- 4th row -->
  <div class="row p-5">
    <div class="container pt-4 d-flex">
      
      <div class="col-9">
        <div class="card border-0">
          <div class="card-body bg-light h3">
            Latest Posts
          </div>
        </div>
        
        <div class="d-flex">
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

      <div class="col-3">          

        <div class="card_aside text-center border mb-3 bg-primary rounded text-white">
          <div class="card_aside_title pt-3">Posts</div>
          <div class="card_aside_body m-1"><i class="fas fa-pen"></i> 7</div>
          <button class="btn rounded mt-2 mb-4 border text-white" style="background-color: rgba(0,0,0,0.0);"><a href="V_listPost.php" class="view">View</a></button>
        </div>
        <div class="card_aside text-center border mb-3 bg-success rounded text-white">
          <div class="card_aside_title pt-3">Categories</div>
          <div class="card_aside_body m-1"><i class="far fa-folder-open"></i> 4</div>
          <button class="btn rounded mt-2 mb-4 border text-white" style="background-color: rgba(0,0,0,0.0);"><a href="V_listCategory.php" class="view">View</a></button>
        </div>
        <div class="card_aside text-center border mb-3 bg-warning rounded text-white">
          <div class="card_aside_title pt-3">Users</div>
          <div class="card_aside_body m-1"><i class="fas fa-users"></i> 6</div>
          <button class="btn rounded mt-2 mb-4 border text-white" style="background-color: rgba(0,0,0,0.0);"><a href="V_listUser.php" class="view">View</a></button>
        </div>
        
      </div>
            
    </div>
  </div>
  
  
  <footer class="row bg-dark p-5 justify-content-center">
    <p class="text-white">Copyright <i class="far fa-copyright"></i> Admin UI</p>
  </footer>

</body>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>
