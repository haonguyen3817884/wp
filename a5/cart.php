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
<body>
<?php
session_start();






?>

<article id="login">
<a href="login.php">login</a>
<?php

include "arraya5.php";

?>
    </article>
    <header>
        <div class="container" >
            <div class="row">
                <div class="col-sm-2">
                <a href="#"><img src="photos a5/logo.jpg" alt="logo" style="width: 92px ; height: 40px;"></a>
                    
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
                  <a class="nav-link" href="indexa5.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php






if($_SERVER['REQUEST_METHOD'] == "POST"){
  $abbr = array_keys($_POST[array_keys($_POST)[0]][array_keys($_POST[array_keys($_POST)[0]])[0]])[0];
  echo $abbr;
  unset($_SESSION[array_keys($_POST)[0]][array_keys($_POST[array_keys($_POST)[0]])[0]][$abbr]);

}



if($_SERVER['REQUEST_METHOD'] == "GET"){
  if(is_array($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]])){
    $quantity_member = $_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]]['qty'];
    
      $_SESSION[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]] = $quantity_member;
      
    

  }else{
    

  }


}




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

 
  
  


  
  ?>
                            
                  
              </ul>
        </nav>
<body>
  
    <section id="cart" class='py-3'>
        <div class="container-fluid w-75">
            <h5>Shopping Cart</h5>
                <div class="row">
                  <div class='col-12'>
                    <?php
                      $total_price = 0;
                    foreach ($_SESSION as $the_new_key3 => $the_new_value3){
                      foreach($_SESSION[$the_new_key3] as $the_new_key4 => $the_new_value4){
                        foreach($_SESSION[$the_new_key3][$the_new_key4] as $the_last_new_key => $the_last_new_value){

                          $convert_qty_number = (int)$the_last_new_value;
                          $convert_price_number = (float)$array_pri[$the_new_key3][$the_new_key4][$the_last_new_key];
                          $total_price = $convert_price_number*$convert_qty_number + $total_price;  
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
                          echo"<form action='cart.php' method='post'>";

                          echo "<input type='submit' class='text-danger' value='delete' name='".$the_new_key3."[".$the_new_key4."]"."[".$the_last_new_key."]"."'>";
                          
                          echo"</form>";
                          
                          echo "</div>";

                  
                          echo "<div class='qty d-flex w-25'>";
                          echo "<p id='sub-".$the_last_new_key."'>$ ".$convert_qty_number*$convert_price_number."</p>";
                          echo "</div>";
                          echo "</div>";
      
      
                          echo "</div>";
                          echo "</div>";
                          

                        }
                      }

                    }
                    
                   
                    
                    
                    ?>
                    

                    
                    
                    </div>


<div class='col'>
<form action="filling_form.php" method='get'>
                <div class='col'>
                <div class="sub-total text-center mt-2 border">
                <h6 class='font-rale text-success py-3' style="font-size:12px"><i class='fa fa-check'></i> Your order is FREE shipping</h6>
                <div class='border-top'>

                <?php
    
    echo "<p style='font-size: 20px'>Total:<span class='text-danger'>$ $total_price</span></p>";
    echo "<input type='hidden' name='total' value='".$total_price."'>";
    
    
    ?>
                </div>
                
                </div>
                </div>
                <div class='col'>
                <?php
                
                echo"<button type='submit'>Proceed to buy</button>"; 
                ?>
                
                </div>
                </form>

                
               
            

</div>
                
                
                
                </div>
        </div>
    </section>



    
    

    



    <script>
    
    
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




      









?>

                    






    
</body>
</html>