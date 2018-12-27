<?php
    include "_header.php";
?>

<!-- 2nd row -->
  <div class="row bg-primary">
    <div class="container">
      <h2 class="text-white p-4 display-4"><i class="fas fa-user"></i> Login</h2>
    </div>
  </div>

<!-- 3th row -->
  <div class="row pl-5 pr-5 pb-5">
    <div class="container pt-4 col-md-6">

    <?php
      if(!empty($_SESSION['msg'])){
        echo "<div class='alert alert-danger'><p class='text-center m-0'>".$_SESSION['msg']."</p></div>";
        unset($_SESSION['msg']);
      }
    ?>
      
      <form class="p-5" method="post" action="C_UserControl.php">
        <div class="form-group pb-2">
          <label for="formGroupExampleInput">Email</label>
          <input type="email" class="form-control" id="formGroupExampleInput" name="email" required>
        </div>
        <div class="form-group pb-4">
          <label for="formGroupExampleInput2">Password</label>
          <input type="password" class="form-control" id="formGroupExampleInput2" name="password" required>
        </div>
        
        <button type="submit" name="login" class="btn btn-primary btn-block p-2">Login</button>
      </form>

      <div class="text-center pb-5"><a href="v_addUser.php">Create New Account</a></div>
      
    </div>
  </div>

<?php
  include "_footer.php";
?>