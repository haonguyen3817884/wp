<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="../style.css">
  <script src='../wireframe.js'></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
        .dropdown:hover>.dropdown-menu {
  display: block;
}
    .nav-link{
        color: black;
    }
    li{
       padding-right: 20px;
    }
    header{
      padding: 20px;
      border-bottom: solid lightgray;
      border-top: solid lightgray;

    }
    nav{
      border-bottom: solid lightgray ;
    }
    #product_place .col-md-4 {
        padding-top: 20px ;
    }
    
   
    </style>
<body >
<?php
session_start();






?>

<article id="login">
      <div class="container">
        <form action="">
       <div class="row">
          <div class="col"> 
 <label for=""></label>
        <textarea name="" id="" cols="30" rows="1" class=""></textarea>
          </div>
          <div class="col">
<label for=""></label>
        <input class="form-control" type="text" name="" id="">
          </div>
       </div>
        
      </form>
      </div>
      
    </article>
    <header>
        <div class="container" >
            <div class="row">
                <div class="col-sm-2">
                    <img src="photos a5/logo.jpg" alt="logo" style="width: 92px ; height: 40px;">
                </div>
                <div class="col">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" style="border: 2px solid black;
                    box-shadow: 0 0 0  black; border-radius: 0;">
                  </div>
                <div class="col-sm-2">
                    <button type="submit" class="form-control" style="background-color: red; border: 1px solid red; box-shadow: 0 0 0 red; border-radius: 0; color: white;">Search</button>
                </div>
                <div class="col-sm-2">
                    
                </div>
            </div>
            
        </div>
    </header>

    
        <nav class="navbar navbar-expand-sm bg-light" style="justify-content: center; background-color: white !important; ">
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php

include "arraya5.php";


if($_SERVER['REQUEST_METHOD'] == "GET"){
  if(is_array($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]])){
    $quantity_member = $_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]]['qty'];
    echo $quantity_member;
      $_SESSION[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]] = $quantity_member;
      
    

  }else{
    echo "no";

  }


}
preShow($_SESSION);




foreach (array_keys($array_name) as $key =>$value){
  $name_categrocies = $array_translated[$value];
  echo"<li class='nav-item dropdown'>";
  echo"<form action='product.php' method='post'>";
  echo "<input name='".$value."' type='submit' class='nav-link dropdown-toggle' id='navbarDropdownMenuLink' style='background-color: white!important; border: none!important;' aria-haspopup='true' aria-expanded='false' value='".$name_categrocies."'>";
  echo "</form>";
  echo "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
  foreach (array_keys($array_name[$value]) as $key3 => $value1){
    $name_categrocies_detailed = $array_translated_child[$value1];
    
    echo"<form action='product.php' method='post'>";
    echo"<input type='submit' name='".$value."[".$value1."] "."'class='dropdown-item' value='".$name_categrocies_detailed."'>";
    echo"</form>";
  }
  echo "</div>";
  echo "</li>";


}
print_r($_POST);
 
  
  


  
  ?>
                            
                  
              </ul>
        </nav>
<body>
  
    <section id="cart" class='py-3'>
        <div class="container-fluid w-75">
            <h5>Shopping Cart</h5>
                <div class="row">

                    <?php

                    foreach ($_SESSION as $the_new_key3 => $the_new_value3){
                      foreach($_SESSION[$the_new_key3] as $the_new_key4 => $the_new_value4){
                        foreach($_SESSION[$the_new_key3][$the_new_key4] as $the_last_new_key => $the_last_new_value){

                          $convert_qty_number = (int)$the_last_new_value;
                          $convert_price_number = (float)$array_pri[$the_new_key3][$the_new_key4][$the_last_new_key];
                    
                          echo "<div class='col-9'>";

                          echo "<div class='row border-top py-3- mt-3'>";
                          echo "<div class='col-2'>";
                          echo "<img src='photos a5/".$array_img_link[$the_new_key3][$the_new_key4][$the_last_new_key]."' style='width: 100px' alt=''>";
                          echo "</div>";
                          echo "<div class='col-8'>";
                          echo "<h5>".$array_name[$the_new_key3][$the_new_key4][$the_last_new_key]."</h5>";
                          echo "<small><i>Produced by Hao Nguyen</i></small>";
                          echo "<div class='font-size-12'>";
                          echo "<span><i class='fa fa-star'></i></span>";
                          echo "<span><i class='fa fa-star'></i></span>";
                          echo "<span><i class='fa fa-star'></i></span>";
                          echo "<span><i class='fa fa-star'></i></span>";
                          echo "<span><i class='fa fa-star-o'></i></span>";
      
                          echo "</div>";
                          echo "<form action='cart.php' method='get'>";
                          echo "<div class='qty d-flex w-25'>";
                          
                          echo '<button  onclick="qtyUp('."'"."qty"."-".$the_last_new_key."'".')" class="qty-up border bg-light"><i class="fa fa-angle-up"></i></button>';
                          echo "<input type='text' id='qty"."-".$the_last_new_key."' class='qty_input' name='".$the_new_key3."[".$the_new_key4."]"."[".$the_last_new_key."]"."["."qty"."]"."' value='".$the_last_new_value."'>";
                          echo '<button onclick ="qtyDown('."'"."qty"."-".$the_last_new_key."'".')" class="qty-up border bg-light"><i class="fa fa-angle-down"></i></button>';
                          
                          echo "</div>";
                          echo "</form>";
                          echo "<div class='qty d-flex w-25'>";
                          echo "<p id='sub-".$the_last_new_key."'>".$convert_qty_number*$convert_price_number."</p>";
                          echo "</div>";
                          echo "</div>";
      
      
                          echo "</div>";
                          echo "</div>";
                          

                        }
                      }

                    }
                    
                   
                    
                    
                    ?>
                    

                    
                    




                </div>
        </div>
    </section>
    

    



    <script>
    var qty = Number(document.getElementById("qty").value)
    console.log(qty);
        function qtyUp(id){
            var qty = Number(document.getElementById(id).value);
            console.log(qty);
            document.getElementById(id).value = String(qty+1);

        }
        function qtyDown(id2){
            var qty = Number(document.getElementById(id2).value);
            console.log(qty);
            if(qty>1){
                document.getElementById(id2).value = String(qty-1);
            }
        }
    </script> 

<?php 
    
    

  
    
  ?>


</body>
                <?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){
 echo"<div class='col-6 col-md-4'>";
  echo"<ul>";
   echo   "<h1>Categories</h1>";
   foreach ($array_name[array_keys($_POST)[0]] as $the_key => $the_value){
     $name_categrorise = $array_translated_child[$the_key]; 
     echo "<li>";
    echo "$name_categrorise";
    echo"</li>";
   }
      
  echo "</ul>";
  echo"</div>";



  
  echo "<div class='col-12 col-md-8'>";
  echo " <div class='row'>";

  if(in_array($array_translated[array_keys($_POST)[0]],$_POST )){
    

  }
  else{
  
  }

  
  foreach($array_name[array_keys($_POST)[0]] as $the_key2 => $the_value2){
    foreach($array_name[array_keys($_POST)[0]][$the_key2] as $the_key4 => $the_value3){
      echo "<div class='col-md-4'>";
      echo"<div class='card'>";
      echo "<img class='img-fluid' alt='100%x280' src='photos a5/".$array_img_link[array_keys($_POST)[0]][$the_key2][$the_key4]."'>";
      echo " <div class='card-body'>";
      echo "<h4 class='card-title'>".$array_name[array_keys($_POST)[0]][$the_key2][$the_key4]."</h4>";
      echo "<p class='card-text'>".$array_pri[array_keys($_POST)[0]][$the_key2][$the_key4]."</p>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }
}


echo  "</div>";
      
      
  
echo"</div>";
    
}


      









?>

                    






    
</body>
</html>