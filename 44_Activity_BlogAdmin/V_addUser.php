<?php
  include "_header.php";
?>

<!-- 2nd row -->
  <div class="row bg-warning">
    <div class="container">
      <h2 class="text-white p-4 display-4"><i class="fas fa-user"></i> Add User</h2>
    </div>
  </div>
  
<!-- 3th row -->
  <div class="row p-5">
    <div class="container pt-4 col-md-6">
      
      <form class="pl-5 pr-5 pb-5" action="C_UserControl.php" method="post">
        <div class="form-group pb-2">
          <label for="formGroupExampleInput">First Name</label>
          <input name="firstName" type="text" class="form-control" id="formGroupExampleInput" placeholder="" required>
        </div>
        <div class="form-group pb-2">
          <label for="formGroupExampleInput">Last Name</label>
          <input name="lastName" type="text" class="form-control" id="formGroupExampleInput" placeholder="" required>
        </div>
        <div class="form-group pb-2">
          <label for="formGroupExampleInput">Email</label>
          <input name="email" type="email" class="form-control" id="formGroupExampleInput" placeholder="" required>
        </div>
        <div class="form-group pb-2">
          <label for="formGroupExampleInput2">Password</label>
          <input name="password" type="password" class="form-control" id="formGroupExampleInput2" placeholder="" required>
        </div>
        <div class="form-group pb-4">
          <label for="formGroupExampleInput2">Confirm Password</label>
          <input name="confirmPassword" type="password" class="form-control" id="formGroupExampleInput2" placeholder="" required>
        </div>
        
        <button name="addUser" type="submit" class="btn btn-primary btn-block p-2">Add User</button>
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
