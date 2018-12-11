<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>0002_bootstrap</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <style>
    img{ width: 100%; object-fit: cover;}
    body{ background: rgb(0,190,222);
background: linear-gradient(90deg, rgba(0,190,222,1) 0%, rgba(201,0,255,1) 100%); }
  </style>
</head>
<body>
  <div class="container bg-white p-0 rounded mt-3">
    
     <div>
       <div class="col-12 p-4 text-center bg-dark text-white rounded-top h2">
         EVENT REGISTRATION FORM
       </div>
     </div>
     
     
     <form class="p-5" action="08_Activity03_form_result.php" method="post">
       
       <div class="form-row m-4">
         <div class="form-group col-sm-2 pt-3">
           <label for="">Name</label>        
         </div>
         <div class="form-group col-sm-5 pr-3">
           <input type="text" class="form-control bg-light p-4" name="FirstName">
           <small class="text-muted">First Name</small>
         </div>
         <div class="form-group col-sm-5 pl-3">
           <input type="text" class="form-control bg-light p-4" name="LastName">
           <small class="text-muted">Last Name</small>
         </div>
       </div>

       <div class="form-row m-4">
         <div class="form-group col-sm-2 pt-3">
           <label for="">Company</label>        
         </div>
         <div class="form-group col-sm-10">
           <input type="text" class="form-control bg-light p-4" name="Company">
         </div>
       </div>

       <div class="form-row m-4">
         <div class="form-group col-sm-2 pt-3">
           <label for="">Email</label>        
         </div>
         <div class="form-group col-sm-10">
           <input type="text" class="form-control bg-light p-4" placeholder="example@email.com" name="Email">
         </div>
       </div>

       <div class="form-row m-4">
         <div class="form-group col-sm-2 pt-3">
           <label for="">Phone</label>        
         </div>
         <div class="form-group col-sm-3 pr-3">
           <input type="text" class="form-control bg-light p-4" name="AreaCode">
           <small class="text-muted">Area Code</small>
         </div>
         <div class="form-group col-sm-7 pl-3">
           <input type="text" class="form-control bg-light p-4" name="PhoneNumber">
           <small class="text-muted">Phone Number</small>
         </div>
       </div>

       <div class="form-row m-4">
         <div class="form-group col-sm-2 pt-2">
           <label for="">Subject</label>        
         </div>
         <div class="form-group col-sm-10">
           <select type="text" class="form-control bg-light" style="height:3rem;" name="Choose" id="">
             <option class="" value="Choose">Choose Option</option>
           </select>
         </div>
       </div>

       <div class="m-4 mt-5 mb-5">
         <p>Are you an existing customer?</p>
          <div class="form-check-inline">
            <input type="radio" name="Existing" class="form-check-input" value="Yes">
            <label for="" class="form-check-label">Yes</label>
          </div>
          <div class="form-check-inline">
            <input type="radio" name="Existing" class="form-check-input" value="No">
            <label for="" class="form-check-label">No</label>
          </div>
       </div>     

       
       <div class="m-4">
        <form action="08_Activity03_form_result.php">
          <button type="submit" class="btn btn-primary p-3 pl-5 pr-5 rounded" name="register" value="register">REGISTER</button>
        </form>  
       </div>       
        
        
     </form>
  </div>  
</body>
</html>