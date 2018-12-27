<?php
  include "_header.php";
  require_once "M_User.php";
  $user = new User;
  $userID = $_SESSION['userID'];
?>

<!-- 2nd row -->
  <div class="row bg-primary">
    <div class="container">
      <h2 class="text-white p-4 display-4"><i class="fas fa-key"></i> Change Password</h2>
    </div>
  </div>

<!-- 3th row -->
  <div class="row pl-5 pr-5 pb-5">
    <div class="container pt-4 col-md-6">
      
      <form class="p-5" method="post" action="C_UserControl.php">
        <div class="form-group pb-2">
          <label for="formGroupExampleInput">Old Password</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="oldPassword" placeholder="<?php echo $user->getOldPassword($userID); ?>" readonly="readonly" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">New Password</label>
          <input type="password" class="form-control" id="formGroupExampleInput2" name="newPassword" required>
        </div>
        <div class="form-group pb-4">
          <label for="formGroupExampleInput2">Confirm Password</label>
          <input type="password" class="form-control" id="formGroupExampleInput2" name="conPassword" required>
        </div>

        <button type="submit" name="updatePassword" class="btn btn-primary btn-block p-2">Update Password</button>
      </form>
      
    </div>
  </div>

<?php
  include "_footer.php";
?>