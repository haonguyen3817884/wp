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
</head>

<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="../style.css">
  <script src='../wireframe.js'></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
    
   
    </style>

<body>

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
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                <?php

                


                session_start();

                

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

        <div class="">

        </div>
        <section class="pt-5 pb-5">
          <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Carousel cards title </h3>
                </div>
                <div class="col-6 text-right">
                  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: red;"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: red;"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
        
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                  <div class="row">
        
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
                                            </div>
        
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                                </div>
                                
                            </div>
                            <div class="carousel-item">
                              <div class="container">
                                <div class="row">
        
                                  <div class="col-md-4 mb-3">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                          <div class="card-body">
                                              <h4 class="card-title">Special title treatment</h4>
                                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      
                                          </div>
      
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                          <div class="card-body">
                                              <h4 class="card-title">Special title treatment</h4>
                                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                          <div class="card-body">
                                              <h4 class="card-title">Special title treatment</h4>
                                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      
                                          </div>
                                      </div>
                                  </div>
      
                              </div>
                              </div>
                                
                            </div>
                            <div class="carousel-item">
                              <div class="container">
                                <div class="row">
                                  
        
                                  <div class="col">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                          <div class="card-body">
                                              <h4 class="card-title">Special title treatment</h4>
                                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      
                                          </div>
      
                                      </div>
                                      
                                  </div>
                                  <div class="col">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                          <div class="card-body">
                                              <h4 class="card-title">Special title treatment</h4>
                                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class="card">
                                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                          <div class="card-body">
                                              <h4 class="card-title">Special title treatment</h4>
                                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
                                        </div>
    
                                    </div>
                                    
                                </div><div class="col">
                                  <div class="card">
                                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                      <div class="card-body">
                                          <h4 class="card-title">Special title treatment</h4>
                                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                          <div><i class='fa fa-star-o'></i></div>
                                      </div>
  
                                  </div>
                                  
                              </div>
                              </div>
                              </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        
        
        
      
          
        
      









    <footer>
        <div>&copy;
          <script>
            document.write(new Date().getFullYear());
          </script> NGUYEN TAN SONG HAO,S3817884.NGO VAN DAT, S3817813. ASSIGNMENT TEAM 1 Last modified 16:00 April
          17<sup>th</sup> 2020.
          <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
          Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </footer>
</body>
</html>