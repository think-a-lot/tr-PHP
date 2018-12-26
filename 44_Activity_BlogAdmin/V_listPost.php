<?php
  include "_header.php";
?>
  
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
