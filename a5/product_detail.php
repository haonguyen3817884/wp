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
 .product_img{
   height: 400px;
 }
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
    body {
      max-width: 100%;
      max-height:100%;
    }
    
   
    </style>
<body >
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
                    <form action="cart.php">
                    
                    <button type="submit" style='background-color: white; border: none;'><i class='fa fa-shopping-cart' aria-hidden="true" style='font-size: 36px'></i></button>
                    </form>
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



session_start();




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

<form action="product_detail.php" method='get'>
    <section id="product" class="py-3">
      <div class="container">
        <div class="row">
          <div class='col-6'>
          <?php
           echo "<img class='product_img' style='width: 500px;' src='photos a5/".$array_img_link[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]]."' alt=''>";
          ?>
          </div>
          <div class="col-6 py-5">
            <h5><?php 
            echo $array_name[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]];
            ?></h5>
            <small><i>Produced by Hao Nguyen</i></small>
            
            <div class='font-size-12'>
              <span><i class='fa fa-star'></i></span>
              <span><i class='fa fa-star'></i></span>
              <span><i class='fa fa-star'></i></span>
              <span><i class='fa fa-star'></i></span>
              <span><i class='fa fa-star-o'></i></span>
            </div>
            <hr>
            <div>
            <?php 

            echo "$ ";
            echo $array_pri[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]];
            ?>
            </div>
            <hr>  
            <div>
              <div class='row'>
                <div class='col'>
                <span class='fa fa-retweet border p-3 rounded-pill' style="color:#33C1FF;"></span>
                <br>
                <a href="#">Return in<br> 10 days</a>
                </div>
                <div class='col'>
                <span class='fa fa-truck border p-3 rounded-pill' style="color:#33C1FF;"></span>
                <br>
                <a href="#">Free <br>shipping</a>
                </div>
                <div class='col'>
                
                </div>
              </div>
              
            </div>
            <hr>
            <div class='row'>
              
              <div class='col'>
                <div class='qty d-flex w-25'>
                  <button type='button'  onclick ="qtyUp()" class="qty-up border bg-light"><i class="fa fa-angle-up"></i></button>
                  <?php
                  echo "<input type='text' id='qty' class='qty_input' name='".array_keys($_GET)[0]."[".array_keys($_GET[array_keys($_GET)[0]])[0]."]"."[".array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]."]"."["."qty"."]"."' value='1'>";
                  ?>
                  <button type='button' onclick ="qtyDown()" class="qty-up border bg-light"><i class="fa fa-angle-down"></i></button>
                </div>
              </div>
              <div class='col'>
              
              <?php
              echo "<button type='submit' >Add to Cart</button>";
              ?>
              
              
              </div>
              
            </div>
          </div>
          <div class='col-12'>
            <h5>Product Description</h5>
            <hr>
            

          
          </div>
          <div class='col-12' >
          
            <?php
            
            echo $array_description[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]];
            
            ?>

          
          </div>
          

        </div>
      </div>
    </section>
    </form>
    


    <script>
    var qty = Number(document.getElementById("qty").value)
    console.log(qty);
        function qtyUp(){
            var qty = Number(document.getElementById("qty").value);
            console.log(qty);
            document.getElementById('qty').value = String(qty+1);

        }
        function qtyDown(){
            var qty = Number(document.getElementById("qty").value);
            console.log(qty);
            if(qty>1){
                document.getElementById('qty').value = String(qty-1);

            }
        }
    </script>     

                <?php 




      



if($_SERVER['REQUEST_METHOD'] == "GET"){
    if(is_array($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]])){
      $product_member = array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0];
      
      $quantity_memb = $_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]]['qty'];
      $_SESSION[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]] = $quantity_memb;
      
  }
  else {
    
  }

}









?>

                    



            



    
</body>
</html>