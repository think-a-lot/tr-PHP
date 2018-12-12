<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>14_Activity04_SelectProduct</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>

  <div class="row">
    <div class="container pt-5 pb-2">
      <h1>Multiplication Table</h1>
    </div>  
  </div>

  <form action="24-2_Activity_makeTable_Result.php" method="post">
    <div class="form-group">

      <div class="row">
        <div class="container">
          <label for="formGroupExampleInput">Row Number</label>
          <input type="text" name="rowNum" class="form-control col-sm-3" id="formGroupExampleInput" placeholder="">
        </div>
      </div>

      <div class="row">
        <div class="container">
          <label for="formGroupExampleInput2">Column Number</label>
          <input type="text" name="colNum" class="form-control col-sm-3" id="formGroupExampleInput2" placeholder="">
        </div>
      </div>

      <div class="row pt-4">
        <div class="container d-flex ">
          <div class="col-sm-2">
            <button type="submit" name="submit" class="btn btn-success">Display Table</button>
          </div>
          <div class="col-sm-2">
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>      
        </div>
      </div>
      
    </div>
  </form>
  
</body>
</html>