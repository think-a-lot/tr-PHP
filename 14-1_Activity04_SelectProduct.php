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
       <div class="col-12 p-4 text-center bg-dark text-white rounded-top h2">
         14 Activity04 - Select Product
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
           <label for="">Age</label>        
         </div>         
         <div class="form-group col-sm-4 pl-3">
           <input type="text" class="form-control bg-light p-4" name="age">
         </div>
       </div>

       <div class="form-row m-4">
         <div class="form-group col-sm-2 pt-2">
           <label for="">Product</label>        
         </div>
         <div class="form-group col-sm-10">
           <select type="text" class="form-control bg-light" style="height:3rem;" name="product" id="">
             <option class="" value="T-shirt">T-Shirt</option>
             <option class="" value="Hoodie">Hoodie</option>
             <option class="" value="Jacket">Jacket</option>
             <option class="" value="Pants">Pants</option>
             <option class="" value="Belt">Belt</option>
           </select>
         </div>
       </div>
  
       <div class="form-row m-4">
         <div class="form-group col-sm-2 pt-3">
           <label for="">Quantity</label>        
         </div>
         <div class="form-group col-sm-10">
           <input type="text" class="form-control bg-light p-4" name="quantity">
         </div>
       </div>

       <div class="m-4 mt-5 mb-5">
        <div class="form-check form-check-inline">
          <label class="form-check-label" for="inlineCheckbox1">
            On Sale?
            <input class="form-check-input ml-3" type="checkbox" id="inlineCheckbox1" name="sale" value="✔">
          </label>
        </div>
       </div>     
       
       <div class="m-4">
        <button type="submit" class="btn btn-primary p-3 pl-5 pr-5 rounded" name="submit" value="register">Submit</button>  
       </div>       
        
        
     </form>
  </div>  
</body>
</html>