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


    <?php
    
    function check_get_data($data){
        global $error_name, $error_card, $error_mobile, $error_email, $error_date;
        global $count_address, $count_name, $count_card, $count_email, $count_mobile;
        global $count_total;
        global $is_data_ok;
    
        $count_card = 0;
        $count_email = 0;
        $count_mobile=0;
        $count_name = 0;
        $count_total = 0;
        $count_address =0;
        
        
        foreach ($data as $key => $value){
            foreach ($data[$key] as $key1 => $value1){
                $validate = trim($data[$key][$key1]);
                $validate = htmlspecialchars($validate);
                $validate = filter_var($validate, FILTER_SANITIZE_STRING);
                echo "+ Your ".$key." [".$key1."]"." has this value".": "."<em>".$validate."</em>";
                echo "</br>";
                
                
                
                    if ($key1 == 'name'){
                        if(!preg_match("/^([A-Za-z'.-]+  ?)*[A-Za-z'.-]+([' ']+|)$/", $validate)){
                            $error_name = "Invalid.";
                            echo "<script>";
                            echo "document.getElementById('custom-name').value ="."'".$validate."'";
                            echo "</script>";
                            $count_name = 0;
                            
                        }
                        else{
                            $error_name = "";
                            $count_name = 1;
                            
                        }
                    }
                    else if ($key1 == 'email'){
                        if(!filter_var($validate, FILTER_VALIDATE_EMAIL)){
                            $error_email = "Invalid.";
                            echo "<script>";
                            echo "document.getElementById('custom-email').value ="."'".$validate."'";
                            echo "</script>";
                            $count_email = 0;
    
                        }
                        else{
                            $error_email = "";
                            $count_email = 1;
    
                        }
                    }
                    else if ($key1 == 'card'){
                        if(!preg_match("/^([0-9] ?){14,19}$/", $validate)){
                            $error_card = "Invalid.";
                            echo "<script>";
                            echo "document.getElementById('custom-card').value ="."'".$validate."'";
                            echo "</script>";
                            $count_card = 0;
    
                        }
                        else{
                            $error_card = "";
                            $count_card = 1;
    
                        }
                    }
                    else if ($key1 == 'mobile'){
                        if(!preg_match("/^(([+](04)|[(][+](04)[)]|[(][+](614)[)]|[+](614)) ?)([0-9] ?){8}$/", $validate)){
                            $error_mobile = "Invalid.";
                            echo "<script>";
                            echo "document.getElementById('custom-mobile').value ="."'".$validate."'";
                            echo "</script>";
                            $count_mobile = 0;
    
                        }
                        else{
                            $error_mobile = "";
                            $count_mobile = 1;
    
                        }
                    }
                    else if ($key1 == 'address'){
                        if(!preg_match("/^[A-Za-z0-9 ]*$/", $validate)){
                            $error_mobile = "Invalid.";
                            echo "<script>";
                            echo "document.getElementById('custom-address').value ="."'".$validate."'";
                            echo "</script>";
                            $count_address = 0;
    
                        }
                        else{
                            $error_mobile = "";
                            $count_address = 1;
    
                        }
                    }
                  
                
            }
        }
        $count_total = $count_card + $count_mobile + $count_email + $count_name + $count_address; 
        if($count_total == 5){
            $is_data_ok = 'ok';
        }
        else{
            $is_data_ok = 'not ok';
        }
      }
      function add_to_cart($post){
          $_SESSION['info'] = $post; 
      }
    
    
    ?>

<script>

function check_regex_name(idem){

    var test_need_to_be_tested_ =document.getElementById(idem).value;
    var regex = new RegExp("^([A-Za-z/'.-]+  ?)*[A-Za-z/'.-]+([' ']+|)$");

    if(regex.test(test_need_to_be_tested_)){

        document.getElementById(idem).style.borderColor = "green";
    }
    else{
        document.getElementById(idem).style.borderColor = "red";
    }

}



function check_regex_email(idem){

var test_need_to_be_tested_ =document.getElementById(idem).value;
var regex = new RegExp("^[A-Za-z/'-_]*[/@][A-Za-z0-9][a-z0-9]+(([/.][a-z]{3})|([/.][a-z]{3}[/.][a-z]*))$");

if(regex.test(test_need_to_be_tested_)){

    document.getElementById(idem).style.borderColor = "green";
}
else{
    document.getElementById(idem).style.borderColor = "red";
}

}


function check_regex_address(idem){

var test_need_to_be_tested_ =document.getElementById(idem).value;
var regex = new RegExp("^[A-Za-z0-9 ]*$");

if(regex.test(test_need_to_be_tested_)){

    document.getElementById(idem).style.borderColor = "green";
}
else{
    document.getElementById(idem).style.borderColor = "red";
}

}


function check_regex_mobile(idem){

var test_need_to_be_tested_ =document.getElementById(idem).value;
var regex = new RegExp("^(([+](04)|[(][+](04)[)]|[(][+](614)[)]|[+](614)) ?)([0-9] ?){8}$");

if(regex.test(test_need_to_be_tested_)){

    document.getElementById(idem).style.borderColor = "green";
}
else{
    document.getElementById(idem).style.borderColor = "red";
}

}

function check_regex_credit_card(idem){

var test_need_to_be_tested_ =document.getElementById(idem).value;
var regex = new RegExp("^([0-9] ?){14,19}$");

if(regex.test(test_need_to_be_tested_)){

    document.getElementById(idem).style.borderColor = "green";
}
else{
    document.getElementById(idem).style.borderColor = "red";
}

}

</script>

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



        




<?php
session_start();


if($_SERVER['REQUEST_METHOD'] == "GET"){
    if(isset($_GET['submit'])){
        check_get_data($_GET);
        if($is_data_ok == "ok" && $_GET['total'] != '0'){
          add_to_cart($_GET);
          echo "all datas have been added into session";
          header('location: new.php');
        }
        else{
          echo "<i style='color:red;'>OOPS Something's wrong</i></br>";
          echo "<i style='color:red;'>Some of your input is INVALID</i>";

        }
        
        
    }
    else {
        
    }

}









?>





<article id="booking-form-area">

<div class='container'>

<form action="filling_form.php" method='get'>


<div class='form-group'>

<?php


echo "<input type='hidden' name='total' id='total' value='".$_GET['total']."'>";


?>





</div>


<div class='form-group'>
<label for="Name">Name</label>

<input type="text" name="custom[name]" id="custom-name" placeholder="e.g. Gerard 't Hooft" class='form-control' onchange='check_regex_name(id)'>




</div>


<div class='form-group'>
<label for="Email">Email</label>

<input type='email' name="custom[email]" id="custom-email" placeholder="e.g. xxxxxxx@gmail.com" class='form-control'onchange='check_regex_email(id)'>




</div>



<div class='form-group'>
<label for="Mobile">Mobile</label>

<input type="tel" name="custom[mobile]" id="custom-mobile" placeholder="e.g. (+614) 1234 5678" class='form-control' onchange='check_regex_mobile(id)'>




</div>


<div class='form-group'>
<label for="Address">Address</label>

<input type="text" name="custom[address]" id="custom-address" placeholder="e.g 12 street" class='form-control'onchange='check_regex_address(id)'>




</div>


<div class='form-group'>
<label for="Credit">Credit Card</label>

<input type="text" name="custom[card]" id="custom-card" placeholder="e.g 1234 5678 9876 5431" class='form-control' onchange='check_regex_credit_card(id)'>




</div>

<div class='form-group'>
<button type="submit" name='submit'>Submit</button>
</div>




</form>


</div>






</article>


<?php







?>



        




    
</body>

</html>