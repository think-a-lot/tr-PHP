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
 <?php
    $Name = $_POST['name'];
    $Age = $_POST['age'];
    $Product = $_POST['product'];
    $Quantity = $_POST['quantity'];
    $Sale = $_POST['sale'];
  ?>
  
  <div class="container bg-white p-0 rounded mt-3">
    
     <div>
       <div class="col-12 p-4 text-center bg-dark text-white rounded-top h2">
         14 Activity04 - Select Product
       </div>
     </div>
     
     <form class="p-5" action="08_Activity03_form_result.php" method="post">
       
       <div class="form-row m-4">
         <div class="form-group col-sm-2 d-flex justify-content-end align-items-center">
           Name        
         </div>
         <div class="form-group col-sm-4">
           <?php echo '<div class="bg-light p-4">'.$Name.'</div>' ;?>
         </div>
         
         <div class="form-group col-sm-2 align-items-center pl-5 d-flex justify-content-end">
           Age        
         </div>         
         <div class="form-group col-sm-4 ">
           <?php echo '<div class="bg-light p-4">'.$Age.'</div>' ;?>
         </div>
       </div>

       <div class="form-row m-4">
         <div class="form-group col-sm-2 align-items-center d-flex justify-content-end">
           Product        
         </div>
         <div class="form-group col-sm-4">
           <?php echo '<div class="bg-light p-4">'.$Product.'</div>' ;?>          
         </div>
         
         <div class="form-group col-sm-2 align-items-center  d-flex justify-content-end">
           On Sale?        
         </div>
         <div class="form-group col-sm-4 ">
           <?php echo '<div class="bg-light p-4">'.$Sale.'</div>' ;?>
         </div>
       </div>
  
       <div class="form-row m-4">
         <div class="form-group col-sm-2 align-items-center d-flex justify-content-end">
           Item Price        
         </div>
         <div class="form-group col-sm-4">
           <div class="bg-light p-4">  
           <?php 
                   if ( $Product == "T-shirt"){ 
                     $exPrice = 500;
                     if ( $Sale == "✔" ){ $saleNum = 20; }
                   }
               elseif ( $Product == "Hoodie" ){ 
                     $exPrice = 900;  
                     if ( $Sale == "✔" ){ $saleNum = 5; }                 
               }
               elseif ( $Product == "Jacket" ){ 
                     $exPrice = 1000;  
                     if ( $Sale == "✔" ){ $saleNum = 15; }
               }
               elseif ( $Product == "Pants"  ){ 
                     $exPrice = 700;  
                     if ( $Sale == "✔" ){ $saleNum = 10; }
               }
               elseif ( $Product == "Belt"   ){ 
                     $exPrice = 300;  
                     if ( $Sale == "✔" ){ $saleNum = 30; }
               }
               $salePrice = $exPrice * ( 1 - $saleNum/100 );              
              
               echo $salePrice." php";
             
               if ( $Sale == "✔" ){ 
                 echo "<br>( ".$exPrice." php - ".$saleNum."% OFF! )";
               }
             
           ;?>
           </div>       
         </div>
         
         <div class="form-group col-sm-2 align-items-center d-flex justify-content-end ">
           <label for="">Quantity</label>        
         </div>
         <div class="form-group col-sm-4 ">
           <?php echo '<div class="bg-light p-4">'.$Quantity.'</div>' ;?>
         </div>
       </div>
  
       <div class="form-row m-4" style="font-size:1.3rem;">
         <div class="form-group col-sm-2 align-items-center d-flex justify-content-end">
           TOTAL        
         </div>
         <div class="form-group col-sm-4">
           <div class="bg-light p-4 font-weight-bold">
             <?php 
                if ( $Sale == "✔" ){
                  echo $salePrice * $Quantity.' php' ;                  
                }else{
                  echo $exPrice * $Quantity.' php' ;
                }
             ?>
           </div>
         </div>
         
       </div>
       
     </form>
  </div>  
</body>
</html>