<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>15-1</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <style>
    img{ width: 100%; object-fit: cover;}
    body{ background: rgb(0,190,222);
background: linear-gradient(90deg, rgba(0,190,222,1) 0%, rgba(201,0,255,1) 100%); }
    input[type=checkbox]{　transform: scale(1.5);　}
  </style>
</head>
<body>
  <div class="container bg-white p-0 rounded mt-3">
    
     <div>
       <div class="col-sm-12 p-4 text-center bg-dark text-white rounded-top h2">
         15 Activity 05 - Phone Usage Calculator
       </div>
     </div>
     
     <form class="p-5" action="14-2_Activity04_SelectProduct_Result.php" method="post">
       
       <div class="form-row m-4">
         <div class="form-group col-sm-2 pt-3">
           <label for="">Name</label>
         </div>
         <div class="form-group col-sm-5 pr-3">
           <input type="text" class="form-control bg-light p-4" name="name">
         </div>
         
         <div class="form-group col-sm-1 pt-3 pl-5">
           <label for="">Type</label>        
         </div> 
         <div class="form-group col-sm-3 pl-3">
           <select type="text" class="form-control bg-light" style="height:3rem;" name="type" id="">
             <option class="" value="Regular">Regular</option>
             <option class="" value="Premium">Premium</option>
           </select>         
         </div>
       </div>

       <div class="form-row m-4">
         <div class="form-group col-sm-2 pt-2">
           <label for="">Day Use</label>        
         </div>
         <div class="form-group col-sm-1 pt-2">
           <label for="">Start Time</label>        
         </div>
         <div class="form-group col-sm-2">
           <input type="text" class="form-control d-inline bg-light p-4" name="d_s_hour" placeholder="h">
         </div>
         <div class="form-group col-sm-2">
           <input type="text" class="form-control d-inline bg-light p-4" name="d_s_min" placeholder="m">
         </div>
         <div class="form-group col-sm-1 pt-2">
           <label for="">Finish Time</label>        
         </div>
         <div class="form-group col-sm-2">
           <input type="text" class="form-control d-inline bg-light p-4" name="d_f_hour" placeholder="h">
         </div>
         <div class="form-group col-sm-2">
           <input type="text" class="form-control d-inline bg-light p-4" name="d_f_min" placeholder="m">
         </div>
       </div>
  
       <div class="form-row m-4">
         <div class="form-group col-sm-2 pt-2">
           <label for="">Night Use</label>        
         </div>
         <div class="form-group col-sm-1 pt-2">
           <label for="">Start Time</label>        
         </div>
         <div class="form-group col-sm-2">
           <input type="text" class="form-control d-inline bg-light p-4" name="n_s_hour" placeholder="h">
         </div>
         <div class="form-group col-sm-2">
           <input type="text" class="form-control d-inline bg-light p-4" name="n_s_min" placeholder="m">
         </div>
         <div class="form-group col-sm-1 pt-2">
           <label for="">Finish Time</label>        
         </div>
         <div class="form-group col-sm-2">
           <input type="text" class="form-control d-inline bg-light p-4" name="n_f_hour" placeholder="h">
         </div>
         <div class="form-group col-sm-2">
           <input type="text" class="form-control d-inline bg-light p-4" name="n_f_min" placeholder="m">
         </div>
       </div>
  
      <div class="row">
        <p class="col-sm-6">Day : 6:00 ~ 17:59</p>
        <p class="col-sm-6">Night : 18:00 ~ 5:59</p>
      </div>
 
      <div class="row">
        <p class="col-sm-6">Regular : Day 0.90/min , Night 0.65/min</p>
        <p class="col-sm-6">Premium : Day 0.75/min , Night 0.50/min</p>
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
        
     </form>
  </div>  
</body>
</html>