<?php
    session_start();
    if (!isset($_SESSION['Userdata']['Username'])){
        header("location: login.php");
        exit;
    }
?>
Congrats <?php echo $_SESSION['Userdata']['Username'] ?>. You have sucessfully logged in. <a href="logout.php"> Click here </a> to log out. 
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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

include "arraya5.php";

?>
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
                  <a class="nav-link" href="adminindex.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php






foreach (array_keys($array_name) as $key =>$value){
  $name_categrocies = $array_translated[$value];
  echo"<li class='nav-item dropdown'>";
  echo"<form action='adminproduct.php' method='post'>";
  echo "<input name='".$value."' type='submit' class='nav-link dropdown-toggle' id='navbarDropdownMenuLink' style='background-color: white!important; border: none!important;' aria-haspopup='true' aria-expanded='false' value='".$name_categrocies."'>";
  echo "</form>";
  echo "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
  foreach (array_keys($array_name[$value]) as $key3 => $value1){
    $name_categrocies_detailed = $array_translated_child[$value1];
    
    echo"<form action='adminproduct.php' method='post'>";
    echo"<input type='submit' name='".$value."[".$value1."] "."'class='dropdown-item' value='".$name_categrocies_detailed."'>";
    echo"</form>";
  }
  echo "</div>";
  echo "</li>";


}

 
  
  


  
  ?>
                
                  
                  
                  
              </ul>
        </nav>

        <article>
          
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="photos a5/carousel 1.jpg" alt="notyet">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="photos a5/carousel 2.jpg" alt="notyet">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="photos a5/carousel 3.jpg" alt="notyet">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          
         
        </article>



        









        <article id="product_place">
            <div class='container'>
                <div class='row'>



                <?php 




if($_SERVER['REQUEST_METHOD'] == "POST"){
 echo"<div class='col-6 col-md-4'>";
  echo"<ul>";
  echo "<form action='adminproduct.php' method='POST'>";
  echo "<input type='submit' style='border:none;background-color: white; font-size: 50px;' name='".array_keys($_POST)[0]."' value='".$array_translated[array_keys($_POST)[0]]."'>";
 echo "</form>";
   foreach ($array_name[array_keys($_POST)[0]] as $the_key => $the_value){
     $name_categrorise = $array_translated_child[$the_key]; 
     echo "<li style='list-style-type: none; margin-top: 20px'>";
     echo "<form action='adminproduct.php' method='POST'>";
     echo "<input type='submit' style='border:none;background-color: white;' name='".array_keys($_POST)[0]."[".$the_key."]"."' value='".$name_categrorise."'>";
    echo "</form>";
    echo"</li>";
   }
      
  echo "</ul>";
  echo"</div>";



  
  echo "<div class='col-12 col-md-8'>";
  echo " <div class='row'>";

  if(in_array($array_translated[array_keys($_POST)[0]],$_POST )){
    
    foreach($array_name[array_keys($_POST)[0]] as $the_key2 => $the_value2){
      foreach($array_name[array_keys($_POST)[0]][$the_key2] as $the_key4 => $the_value3){
        echo "<div class='col-md-4'>";
        echo"<div class='card'>";
        echo "<img class='img-fluid' alt='100%x280' style='height: 280px;' src='photos a5/".$array_img_link[array_keys($_POST)[0]][$the_key2][$the_key4]."'>";
        echo " <div class='card-body'>";
        echo "<h4 class='card-title'>".$array_name[array_keys($_POST)[0]][$the_key2][$the_key4]."</h4>";
        echo "<p class='card-text'>$ ".$array_pri[array_keys($_POST)[0]][$the_key2][$the_key4]."</p>";
        echo "<form action='database.php' method='get'>";
        echo "<input type='text' placeholder='input new name' name='".array_keys($_POST)[0]."[".$the_key2."]"."[".$the_key4."]"."["."name"."]"."'>";
        echo "<input type='text' placeholder='input new price' name='".array_keys($_POST)[0]."[".$the_key2."]"."[".$the_key4."]"."["."price"."]"."'>";
        echo "<input type='text' placeholder='input new description' name='".array_keys($_POST)[0]."[".$the_key2."]"."[".$the_key4."]"."["."description"."]"."'>";
        echo "<input type='submit' value='Apply the change'>";
        echo "</form>";
        echo "<form action='database.php' method='get'>";
        echo "<input type='submit' value='delete' name='".array_keys($_POST)[0]."[".$the_key2."]"."[".$the_key4."]"."["."delete"."]"."'>";
        echo "</form>";
        echo "<i class='fa fa-star'></i>";
        echo "<i class='fa fa-star'></i>";
        echo "<i class='fa fa-star'></i>";
        echo "<i class='fa fa-star'></i>";
        echo "<i class='fa fa-star-o'></i>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      }
  }
  }
  else{

      foreach($array_name[array_keys($_POST)[0]][array_keys($_POST[array_keys($_POST)[0]])[0]] as $the_key5 => $the_value5){
        echo "<div class='col-md-4'>";
        echo"<div class='card'>";
        echo "<img class='img-fluid' alt='100%x280' style='height: 280px;' src='photos a5/".$array_img_link[array_keys($_POST)[0]][array_keys($_POST[array_keys($_POST)[0]])[0]][$the_key5]."'>";
        echo " <div class='card-body'>";
        echo "<p class='card-text'>".$array_name[array_keys($_POST)[0]][array_keys($_POST[array_keys($_POST)[0]])[0]][$the_key5]."</p>";
        echo "<p class='card-text'>$ ".$array_pri[array_keys($_POST)[0]][array_keys($_POST[array_keys($_POST)[0]])[0]][$the_key5]."</p>";
        echo "<form action='database.php' method='get'>";
        echo "<input type='text' placeholder='input new name' name='".array_keys($_POST)[0]."[".array_keys($_POST[array_keys($_POST)[0]])[0]."]"."[".$the_key5."]"."["."name"."]"."'>";
        echo "<input type='text' placeholder='input new price' name='".array_keys($_POST)[0]."[".array_keys($_POST[array_keys($_POST)[0]])[0]."]"."[".$the_key5."]"."["."price"."]"."'>";
        echo "<input type='text' placeholder='input new description' name='".array_keys($_POST)[0]."[".array_keys($_POST[array_keys($_POST)[0]])[0]."]"."[".$the_key5."]"."["."description"."]"."'>";
        echo "<input type='submit' value='Apply the change'>";
        echo "</form>";
        echo "<form action='database.php' method='get'>";
        echo "<input type='submit' value='delete' name='".array_keys($_POST)[0]."[".array_keys($_POST[array_keys($_POST)[0]])[0]."]"."[".$the_key5."]"."["."delete"."]"."'>";
        echo "</form>";
        echo "<i class='fa fa-star'></i>";
        echo "<i class='fa fa-star'></i>";
        echo "<i class='fa fa-star'></i>";
        echo "<i class='fa fa-star'></i>";
        echo "<i class='fa fa-star-o'></i>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      }
  
  }

  
  


echo  "</div>";
      
      
  
echo"</div>";
    
}


      









?>

                    



                </div>
            </div>
        </article>




    
</body>
</html>