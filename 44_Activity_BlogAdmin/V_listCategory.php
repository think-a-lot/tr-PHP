<?php
  include "_header.php";
?>

<!-- 2nd row -->
  <div class="row bg-success">
    <div class="container">
      <h2 class="text-white p-4 display-4"><i class="far fa-folder-open"></i> Category List</h2>
    </div>
  </div>
  
<!-- 3rd row -->
  <div class="row p-4 bg-light">
    <div class="container">
      <form class="form-inline justify-content-end">
        <div class="input-group rounded">
          <input class="form-control" type="search" name="" placeholder="Search Category">
          <div class="input-group-prepend">
            <span class="input-group-text bg-success text-white border-0 rounded-right">Search</span>
            </div>
        </div>
      </form>        
    </div>
  </div>
  
<!-- 4th row -->
  <div class="row pl-5 pr-5 pb-5">
    <div class="container pt-4">
        
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th>Category</th>
            <th>Date Posted</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>Web Development</td>
            <td>July 22, 2017</td>
          </tr>
          <tr>
            <th>2</th>
            <td>Web Development</td>
            <td>July 22, 2017</td>
          </tr>
          <tr>
            <th>3</th>
            <td>Web Development</td>
            <td>July 22, 2017</td>
          </tr>
          <tr>
            <th>4</th>
            <td>Web Development</td>
            <td>July 22, 2017</td>
          </tr>
          <tr>
            <th>5</th>
            <td>Web Development</td>
            <td>July 22, 2017</td>
          </tr>
          <tr>
            <th>6</th>
            <td>Web Development</td>
            <td>July 22, 2017</td>
          </tr>
          <tr>
            <th>7</th>
            <td>Web Development</td>
            <td>July 22, 2017</td>
          </tr>
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
