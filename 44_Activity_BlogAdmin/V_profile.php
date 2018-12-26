<?php
  include "_header.php";
?>

<!-- 2nd row -->
  <div class="row bg-primary">
    <div class="container">
      <h2 class="text-white p-4 display-4"><i class="fas fa-user"></i> Profile</h2>
    </div>
  </div>
  
<!-- 3rd row -->
  <div class="row p-4 bg-light">
    <div class="container d-flex justify-content-between">
      <button class="btn btn btn-white border pl-5 pr-5 p-2"><i class="fas fa-arrow-left"></i> Back To Dashboard</button>
      
      <div>
        <button class="btn btn btn-success border pl-5 pr-5 p-2 mr-4"><i class="fas fa-lock"></i> Change Password</button>
        <button class="btn btn btn-danger border pl-5 pr-5 p-2"><i class="fas fa-trash-alt"></i> Delete Account</button>
      </div>
    </div>
  </div>
  
<!-- 4th row -->
  <div class="row p-5">
    <div class="container pt-4 d-flex">
      
      <div class="col-9">
       
        <div class="card border-0">
          <div class="card-body bg-light h3">
            Edit Profile
          </div>
        </div>
        
        <form class="pt-2 pl-4 pr-4">
          <div class="form-group pb-2">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" required>
          </div>
          <div class="form-group pb-2">
            <label for="formGroupExampleInput">Email</label>
            <input type="email" class="form-control" id="formGroupExampleInput" placeholder="" required>
          </div>
          <div class="form-group pb-4">
            <label for="formGroupExampleInput2">Bio</label>
          <textarea class="form-control" rows="3" id="comment"></textarea>
          </div>          

        </form>  
              
      </div>     

      <div class="col-3">          

        <h3>Your Avatar</h3>
        <div><img src="img/016_Activity05-8_Profile.jpeg" class="w-100" alt=""></div>        
        <div>
          <button class="btn btn btn-primary border w-100 mt-3"><i class="fas fa-pen"></i> Edit Image</button>
          <button class="btn btn btn-danger border w-100 mt-3"><i class="fas fa-times"></i> Delete Image</button>
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
