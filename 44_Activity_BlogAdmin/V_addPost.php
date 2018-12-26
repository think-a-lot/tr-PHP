<?php
  include "_header.php";
?>


<!-- 2nd row -->
  <div class="row bg-primary">
    <div class="container">
      <h2 class="text-white p-4 display-4"><i class="fas fa-user"></i> Add Post</h2>
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
          <label for="formGroupExampleInput">Title</label>
          <input name="postTitle" type="text" class="form-control" id="formGroupExampleInput" placeholder="" required>
        </div>
        <div class="form-group pb-2">
          <label for="formGroupExampleInput">Category</label><br>
          <select name="postCategory" id="formGroupExampleInput" class="form-control">
            <option value="Web Development">Web Devlopment</option>
            <option value="Web Design">Web Design</option>
            <option value="Web SEO">Web SEO</option>
            <option value="Web Writing">Web Writing</option>
            <option value="Web Network">Web Network</option>
            <option value="Web Security">Web Security</option>
          </select>
        </div>
        <div class="form-group pb-2">
          <label for="formGroupExampleInput">Content</label>
          <textarea name="postContent" id="formGroupExampleInput" cols="30" rows="10" class="form-control"></textarea>
        </div>
        
        <button name="addPost" type="submit" class="btn btn-primary btn-block p-2">Add Post</button>
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
