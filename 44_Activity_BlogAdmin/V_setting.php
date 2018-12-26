<?php
  include "_header.php";
?>

<!-- 2nd row -->
  <div class="row bg-primary">
    <div class="container">
      <h2 class="text-white p-4 display-4"><i class="fas fa-cog"></i> Setting</h2>
    </div>
  </div>
  
  
<!-- 3rd row -->
  <div class="row p-4 bg-light">
    <div class="container d-flex justify-content-between">
      <button class="btn btn btn-white border pl-5 pr-5 p-2"><i class="fas fa-arrow-left"></i> Back To Dashboard</button>
      <button class="btn btn btn-success border pl-5 pr-5 p-2"><i class="fas fa-check"></i> Save Changes</button>
    </div>
  </div>
  
<!-- 4th row -->
  <div class="row p-5">
    <div class="container pt-4 col-md-6">
      
      <div class="card border-0 mb-3">
        <div class="card-body bg-light h3">
          Edit Setting
        </div>
      </div>
      
      <fieldset class="form-group pl-4 p">
        <legend>Allow User Registration</legend>
        <div class="form-check pb-3">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optionsRadios" id="allowUserReg_Yes" value="yes" checked>
            Yes
          </label>
        </div>
        <div class="form-check pb-3">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optionsRadios" id="allowUserReg_No" value="no" checked>
            No
          </label>
        </div>
      </fieldset>
      
      <fieldset class="form-group pl-4 p">
        <legend>Homepage Format</legend>
        <div class="form-check pb-3">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optionsRadios" id="PageFormat_post" value="postIndex" checked>
            Post Index
          </label>
        </div>
        <div class="form-check pb-3">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optionsRadios" id="PageFormat_single" value="singlePage" checked>
            Single Page
          </label>
        </div>
      </fieldset>
            
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
