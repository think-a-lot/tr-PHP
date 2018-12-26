<?php
  include "_header.php";
?>

<!-- 2nd row -->
  <div class="row bg-success">
    <div class="container">
      <h2 class="text-white p-4 display-4"><i class="far fa-folder-open"></i> Add Category</h2>
    </div>
  </div>

<!-- 3th row -->
  <div class="row p-5">
    <div class="container pt-4 col-md-6">
      
      <!-- <div class="card border-0">
        <div class="card-body bg-light h3">
          Add Category
        </div>
      </div>   -->
      
      <form class="pl-5 pr-5 pb-5" action="C_UserControl.php" method="post">
        <div class="form-group pb-2">
          <label for="formGroupExampleInput">Category Name</label>
          <input name="categoryName" type="text" class="form-control" id="formGroupExampleInput" placeholder="" required>
        </div>
        
        <button name="addCategory" type="submit" class="btn btn-primary btn-block p-2">Add Category</button>
      </form>
      
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
