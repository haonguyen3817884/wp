<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="../style.css">
  <script src='../wireframe.js'></script>
  <link rel="stylesheet" href="style.css" type="text/css">
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

</head>

<body onload="hide();limitDate();" onscroll="swth();" onmouseover="total_check();check_and_givefeedback();">


    <?php
    include 'tool.php';

    echo "<p> your post data </p>";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      check_post_data($_POST);
    }
    if($is_data_ok == "ok"){
      add_to_cart($_POST);
      echo "all datas have been added into session";
      header('location: receipt.php');
    }
    else{
      echo "invalid";
      $_SESSION['cart']=array();
    }
    
    ?>
  <!--Header-->

  <header>
    <div class="container">
      <div class="row">
        <div class="col" style="font-weight: bolder; font-size: 50px 50px;">
          <a href=""><img src="photos/cinemax-logo.jpg" alt="cinemax-logo" width="350px" height="60px">
          </a>
        </div>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
      </div>
    </div>
  </header>


  <!--Navigate-->



  <nav class="nav-site">
    <div class="container">
      <div class="row">
        <div class="col-sm-4"
          style="text-align: center; border-left: solid; text-decoration: floralwhite; color: ghostwhite;"><a
            href="#About-Us" id="option1" class="nav-link" onmouseover="hover(id);" onmouseout="unactivate(id);">ABOUT
            US</a>
        </div>
        <div class="col-sm-4"
          style="text-align: center; border-left: solid ; text-decoration: floralwhite; color: ghostwhite ;"><a
            href="#Now-Showing" id="option2" class="nav-link" onmouseover="hover(id);" onmouseout="unactivate(id)">NOW
            SHOWING</a>
        </div>
        <div class="col-sm-4"
          style="text-align: center; border-left: solid ; text-decoration: floralwhite; color: ghostwhite; border-right: solid ;">
          <a href="#Price" id="option3" class="nav-link" onmouseover="hover(id);" onmouseout="unactivate(id);">PRICE</a>
        </div>
      </div>
    </div>
  </nav>


  <!---->

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="photos/bloodshoot-long.jpg" alt="onward picture">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="photos/nang3-long.jpg" alt="nang">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="photos/onward-long.jpg" alt="onward picture">
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






  <!--Comming-Soon-->

  <section id="Comming-Soon">

    <div class="container" style="padding: 30px 30px 30px;">
      <div class="row" style=" border-bottom: solid whitesmoke; text-align: center; margin-bottom: 40px;">
        <div class="col">
          <p style="font-size: 35px; font-weight: 300; color: whitesmoke;">UPCOMING MOVIES</p>
        </div>
      </div>


      <div class="row" style="text-align: center;">

        <div class="col">
          <div class="movies-poster-cards">
            <div class="card" style="width: 50; height: 100;">
              <img src="photos/bloodshot.jpg" alt="poster" class="card-img-top" width="100" height="300">
              <div class="card-body">
                <h1 class="card-title">Bloodshot</h1>
                <p class="card-text">Release Date:</p>
                <p class="card-text">20/2/2020</p>
              </div>
            </div>
            <a href="https://youtu.be/vOUVVDWdXbo" class="buttons">Watch Trailer</a>
          </div>

        </div>


        <div class="col">
          <div class="movies-poster-cards">
            <div class="card" style="width: 50; height: 100;">
              <img class="card-img-top" src="photos/aquietplace.jpg" alt="poster" width="100" height="300">
              <div class="card-body">
                <h1 class="card-title">A Quiet Place: Part 2</h1>
                <p class="card-text">Release Date:</p>
                <p class="card-text">20/3/2020</p>

              </div>
            </div>
            <a href="https://www.imdb.com/video/vi2444541465?playlistId=tt8332922&ref_=tt_ov_vi" class="buttons">Watch
              Trailer</a>
          </div>

        </div>



        <div class="col">
          <div class="movies-poster-cards">
            <div class="card" style="width: 50; height: 100;">
              <img src="photos/latmat5.jpg" alt="poster" class="card-img-top" width="100" height="300">
              <div class="card-body">
                <h1 class="card-title">Lat Mat 5: 48h</h1>
                <p class="card-text">Release Date</p>
                <p class="card-text">30/4/2020</p>
              </div>
            </div>
            <a href="https://www.youtube.com/watch?v=ikByU-o9-rA" class="buttons">Watch Trailer</a>
          </div>


        </div>


        <div class="col">
          <div class="movies-poster-cards">
            <div class="card" style="width: 50; height: 100;">
              <img src="photos/babayaga.jpg" alt="poster" class="card-img-top" width="100" height="300">
              <div class="card-body">
                <h1 class="card-title">Baba Yaga: Terror of The Dark Forest</h1>
                <p class="card-text">Release Date</p>
                <p class="card-text">27/2/2020</p>
              </div>
            </div>
            <a href="https://www.youtube.com/watch?v=SqVAJ91D3yE" class="buttons">Watch Trailer</a>
          </div>

        </div>


      </div>

    </div>

    </div>

  </section>

  <!--About Us-->

  <section id="About-Us" onfocus="activate('option1')">
    <div class="container">
      <div class="title">
        <h1> ABOUT US</h1>

      </div>


      <div class="introduction">
        <div class="row">
          <div class="col" style="text-align: right;">
            <img src="photos/aboutus.jpg" alt="intro-img" width="400" height="250">
          </div>
          <div class="col" style="text-align: left;">

            <div class="intro">
              <h2>Welcome Back</h2>
            </div>
            <div class="text">
              <p>Our company has offically come back with a completely different look. We have upgraded our facilities
                to bring new experiences to you</p>
            </div>
            <div class="list">
              <h3>Upgrades:</h3>
              <p> <img
                  src="https://static.vecteezy.com/system/resources/thumbnails/000/441/750/small/Basic_Element_15-30__28586_29.jpg"
                  alt="tick" width="10px" height="10px"> New Seats</p>
              </li>
              <p> <img
                  src="https://static.vecteezy.com/system/resources/thumbnails/000/441/750/small/Basic_Element_15-30__28586_29.jpg"
                  alt="tick" width="10px" height="10px"> Dolby Atmos Sound</p>
              </li>
              <p> <img
                  src="https://static.vecteezy.com/system/resources/thumbnails/000/441/750/small/Basic_Element_15-30__28586_29.jpg"
                  alt="icon" width="10" height="10"> Dolby Vision Projection</p>
              </li>

            </div>


          </div>
        </div>
      </div>
      <div class="first-upgrade">

        <a href="https://www.profurn.com.au/shop/education-lecture" class="see-more-links">
          <div class="headings">
            <p>New First-Class and Standard Seats</p>
          </div>
        </a>


        <div>

          <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col"><img src="photos/firstclass-seat1.jpg" alt="slide1"></div>
                  <div class="col"><img src="photos/firstclass-seat2.jpg" alt="slide1"></div>
                  <div class="col"><img src="photos/firstclass-seat3.jpg" alt="slide1"></div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="row">
                  <div class="col"><img src="photos/standard-seat1.jpg" alt="slide3">
                  </div>
                  <div class="col"><img src="photos/standard-seat2.jpg" alt="slide3"></div>
                  <div class="col"><img src="photos/standard-seat3.jpg" alt="slide3">
                  </div>
                </div>

              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

          </div>

        </div>

      </div>
      <div class="second-upgrade">
        <a href="https://www.dolby.com/us/en/brands/dolby-atmos.html" class="see-more-links">

          <div class="headings">
            <p>3D Dolby Atmos Sound and Vision Projection</p>

          </div>
        </a>


        <div>
          <div>
            <div id="demo2" class="carousel slide" data-ride="carousel">
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">



                  <div class="row">
                    <div class="col"><img src="photos/dolby 2.jpg" alt="slide2"></div>
                    <div class="col"><img src="photos/dolby 3.jpg" alt="slide2"></div>
                    <div class="col"><img src="photos/dolby 5.4.jpg" alt="slide2"></div>
                  </div>

                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col"><img src="photos/Dolby 9.jpg" alt="slide3">
                    </div>
                    <div class="col"><img src="photos/dolby 8.jpg" alt="slide3"></div>
                    <div class="col"><img src="photos/dolby 6.jpg" alt="slide3"></div>
                  </div>

                </div>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo2" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

            </div>
          </div>
        </div>

      </div>









    </div>
  </section>



  <!--Now-showing-->

  <section id="Now-Showing" onscroll="activate('option3');">

    <div class="parallex-scrolling" id="parallex-scrolling-1">
      <div class="container">
        <div class="title">
          <h1> NOW SHOWING </h1>
        </div>

        <div class="movie-panel">

          <div class="row">
            <!--first column-->
            <div class="col" style="text-align: center;">
              <div class="movies-poster-cards" id="moviePanelAMN">
                <div class="card" style=" padding: 20px; border: solid;">
                  <div class="row no-gutters">
                    <div class="col">
                      <img class="card-img-left" src="photos/dumbo.jpg" alt="poster-image" width="260" height="312">
                    </div>
                    <div class="col">
                      <div class="card-body">
                        <h1 class="card-title" id="AMN-title">Dumbo</h1>
                        <div class="card-text">
                          <p><strong>Time</strong>:</p>
                          <p class="card-text">Monday - Tuesday: 12:00 PM</p>
                          <p class="card-text">Wednesday - Friday: 6:00 PM</p>
                          <p class="card-text">Saturday - Sunday: 12:00 PM</p>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <a href="#synopsisAMN" id="AMN-button" class="buttons" onclick="update_movieID(id)">Movie Detail</a>
              </div>

            </div>

            <!--second column-->
            <div class="col" style="text-align: center;">
              <div class="movies-poster-cards" id="moviePanelAHF">
                <div class="card" style=" padding: 20px; border: solid;">
                  <div class="row no-gutters">
                    <div class="col">
                      <img class="card-img-left" src="photos/thehappyprince.jpg" alt="poster-image" width="260"
                        height="312">
                    </div>
                    <div class="col">
                      <div class="card-body">
                        <h1 class="card-title" id="AHF-title">The Happy Prince</h1>
                        <div class="card-text">
                          <p><strong>Time</strong>:</p>
                          <p class="card-text">Wednesday - Friday: 12:00 PM</p>
                          <p class="card-text">Saturday: 9:00 PM</p>
                          <p class="card-text">Sunday: 9:00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="#synopsisAHF" id="AHF-button" class="buttons" onclick="update_movieID(id)">Movie
                  Detail</a>
              </div>
            </div>
          </div>
        </div>


        <div class="movie-panel">
          <div class="row">
            <!--first column-->
            <div class="col" style="text-align: center;">
              <div class="movies-poster-cards" id="moviePanelRMC">
                <div class="card" style=" padding: 20px; border: solid;">
                  <div class="row no-gutters">
                    <div class="col">
                      <img class="card-img-left" src="photos/topendwedding.jpg" alt="poster-image" width="260"
                        height="312">
                    </div>
                    <div class="col">
                      <div class="card-body">
                        <h1 class="card-title" id="RMC-title">Top-End-Wedding</h1>
                        <div class="card-text">
                          <p><strong>Time</strong>:</p>
                          <p class="card-text">Monday - Tuesday: 6:00 PM</p>
                          <p class="card-text">Saturday: 3:00 PM</p>
                          <p class="card-text">Sunday: 3:00 PM</p>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <a href="#synopsisRMC" id="RMC-button" class="buttons" onclick="update_movieID(id)">Movie Detail</a>
              </div>
            </div>

            <!--second column-->
            <div class="col" style="text-align: center;">
              <div class="movies-poster-cards" id="moviePanelACT">
                <div class="card" style=" padding: 20px; border: solid;">
                  <div class="row no-gutters">
                    <div class="col">
                      <img class="card-img-left" src="photos/avengers.jpg" alt="poster-image" width="260" height="312">
                    </div>
                    <div class="col">
                      <div class="card-body">
                        <h1 class="card-title" id="ACT-title">Avengers: Endgame</h1>
                        <div class="card-text">
                          <p><strong>Time</strong>:</p>
                          <p class="card-text">Wednesday - Friday: 9:00 PM</p>
                          <p class="card-text">Saturday: 6:00 PM</p>
                          <p class="card-text">Sunday: 6:00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="#synopsisACT" id="ACT-button" class="buttons" onclick="update_movieID(id)">Movie Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Price-->

  <section id="Price" onscroll="activate('option2')">
    <div class="container">
      <div class="title">
        <h1>PRICE</h1>
      </div>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Seat Type</th>
            <th scope="col">Seat Code</th>
            <th scope="col">All day Monday and Wednesday AND 12pm on Weekdays</th>
            <th scope="col">All other times</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Standard Adult</th>
            <td>STA</td>
            <td id="STA-discount">14.00</td>
            <td id="STA-fullprice">19.80</td>
          </tr>
          <tr>
            <th scope="row">Standard Concession</th>
            <td>STP</td>
            <td id="STP-discount">12.50</td>
            <td id="STP-fullprice">17.50</td>
          </tr>
          <tr>
            <th scope="row">Standard Child</th>
            <td>STC</td>
            <td id="STC-discount">11.00</td>
            <td id="STC-fullprice">15.30</td>
          </tr>
          <tr>
            <th scope="row">First Class Adult</th>
            <td>FCA</td>
            <td id="FCA-discount">24.00</td>
            <td id="FCA-fullprice">30.00</td>
          </tr>
          <tr>
            <th scope="row">First Class Concession</th>
            <td>FCP</td>
            <td id="FCP-discount">22.50</td>
            <td id="FCP-fullprice">27.00</td>
          </tr>
          <tr>
            <th>First Class Child</th>
            <td>FCC</td>
            <td id="FCC-discount">21.00</td>
            <td id="FCC-fullprice">24.00</td>

          </tr>
        </tbody>
      </table>




    </div>


  </section>





  <!--Synopsis-->

  <article id="summary" onscroll="activate(id)">
    <div class="container">
      <div class="title" style="color: whitesmoke; border-bottom: solid whitesmoke;">
        <h1>SYNOPSIS</h1>
      </div>
      <!--The-Happy-Prince-->
      <div class="panel toggle" id="synopsisAHF">
        <div class="row">
          <div class="col">
            <div class="movie-title">
              <p class="left-site">The Happy Prince</p>
              <p class="right-site">
                <P>R</P>
              </p>
            </div>
            <p class="plot">Plot Description:</p>
            <p class="line"> <u>The movie tells a story of Oscar Wilde who is irish poet and playwright in
                the 19th century. He was in jail for being a homosexual man for two years.
                After that, he spends his last days in exile. That is also when the film gets
                started. Immersing himself in drugs and wines, he is now looking at his
                failures and difficulties with what defined him </u></p>
          </div>
          <div class="col">
            <div class="video">
              <iframe width="550" height="300" src="https://www.youtube.com/embed/JHeOo0UGrbY" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <div class="words">
              Make a booking:
            </div>
          </div>
          <div class="col">
            <div class="the-links">
              <a href="#Booking-area" class="booking-links" id="AHF-button1" onclick="select_movie(id);">WED T12</a>
              <a href="#Booking-area" class="booking-links" id="AHF-button2" onclick="select_movie(id)">THU T12</a>
              <a href="#Booking-area" class="booking-links" id="AHF-button3" onclick="select_movie(id)">FRI T12</a>
              <a href="#Booking-area" class="booking-links" id="AHF-button4" onclick="select_movie(id)">SAT T21</a>
              <a href="#Booking-area" class="booking-links" id="AHF-button5" onclick="select_movie(id)">SUN T21</a>
            </div>
          </div>
        </div>
      </div>
      <!--Top-Edn-Wedding-->
      <div class="panel toggle" id="synopsisRMC">
        <div class="row">
          <div class="col">
            <div class="movie-title">
              <p class="left-site">Top-End-Wedding</p>
              <p class="right-site">
                <P>NR</P>
              </p>
            </div>
            <p class="plot">Plot Description:</p>
            <p class="line"> <u>This Comedy movie talks about a fanstatic road trip taken by Lauren and Ned.
                The couples have only 10 days to find Lauren's mother who has gone missing and have a wedding.
                The trip brought amazing experiences to the couples and also helped them know more about their
                partners.</u>
            </p>
          </div>
          <div class="col">
            <div class="video">
              <iframe width="550" height="300" src="https://www.youtube.com/embed/uoDBvGF9pPU" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <div class="words">
              Make a booking:
            </div>
          </div>
          <div class="col">
            <div class="the-links">
              <a href="#Booking-area" class="booking-links" id="RMC-button1" onclick="select_movie(id)">MON T18</a>
              <a href="#Booking-area" class="booking-links" id="RMC-button2" onclick="select_movie(id)">TUE T18</a>
              <a href="#Booking-area" class="booking-links" id="RMC-button3" onclick="select_movie(id)">SAT T15</a>
              <a href="#Booking-area" class="booking-links" id="RMC-button4" onclick="select_movie(id)">SUN T15</a>
            </div>
          </div>
        </div>
      </div>
      <!--Dumbo-->
      <div class="panel toggle" id="synopsisAMN">
        <div class="row">
          <div class="col">
            <div class="movie-title">
              <p class="left-site">Dumbo</p>
              <p class="right-site">
                <P>PG</P>
              </p>
            </div>
            <p class="plot">Plot Description:</p>
            <p class="line"> <u>Based on a movie of the same name in 1941, the movie tells
                a story of a young elephant. With his oversized ears, he accidentally
                found that by flapping them he is able to fly. Thanks to that, the circus where he performs is getting
                more popular. Mr. Vandevere who is a very famous entrepreneur in New York also pays attention to it.
                He wants Dumbo to perform in his park. </u></p>
          </div>
          <div class="col">
            <div class="video">
              <iframe width="550" height="300" src="https://www.youtube.com/embed/7NiYVoqBt-8" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <div class="words">
              Make a booking:
            </div>
          </div>
          <div class="col">
            <div class="the-links">
              <a href="#Booking-area" class="booking-links" id="AMN-button1" onclick="select_movie(id)">MON T12</a>
              <a href="#Booking-area" class="booking-links" id="AMN-button2" onclick="select_movie(id)">TUE T12</a>
              <a href="#Booking-area" class="booking-links" id="AMN-button3" onclick="select_movie(id)">WED T18</a>
              <a href="#Booking-area" class="booking-links" id="AMN-button4" onclick="select_movie(id)">THU T18</a>
              <a href="#Booking-area" class="booking-links" id="AMN-button5" onclick="select_movie(id)">FRI T18</a>
              <a href="#Booking-area" class="booking-links" id="AMN-button6" onclick="select_movie(id)">SAT T12</a>
              <a href="#Booking-area" class="booking-links" id="AMN-button7" onclick="select_movie(id)">SUN T12</a>
            </div>
          </div>
        </div>
      </div>
      <!--Avengers-->
      <div class="panel toggle" id="synopsisACT">
        <div class="row">
          <div class="col">
            <div class="movie-title">
              <p class="left-site">Avengers: End Game</p>
              <p class="right-site">
                <P>PG</P>
              </p>
            </div>
            <p class="plot">Plot Description:</p>
            <p class="line"> <u>Following Avengers: Infinity War, after Thanos's snap, nearly 50% of all living
                creatures has gone.
                Members of The Avengers is trying to gather to find Thanos and undo what he did.
                However, they finally realize that their only hope is gone when Thanos has destroyed all the infinity
                stones.
                5 years after Thanos's death, Scott Lang who is considered dead luckily get back from quantumn realm and
                bring the second chance
                to save people who're gone because of Thanos's snap. </u></p>
          </div>
          <div class="col">
            <div class="video">
              <iframe width="550" height="300" src="https://www.youtube.com/embed/9tKr3m6r9NI" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <div class="words">
              Make a booking:
            </div>
          </div>
          <div class="col">
            <div class="the-links">
              <a href="#Booking-area" class="booking-links" id="ACT-button1" onclick="select_movie(id)">WED T21</a>
              <a href="#Booking-area" class="booking-links" id="ACT-button2" onclick="select_movie(id)">THU T21</a>
              <a href="#Booking-area" class="booking-links" id="ACT-button3" onclick="select_movie(id)">FRI T21</a>
              <a href="#Booking-area" class="booking-links" id="ACT-button4" onclick="select_movie(id)">SAT T18</a>
              <a href="#Booking-area" class="booking-links" id="ACT-button5" onclick="select_movie(id)">SUN T18</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>

  <!--booking-->
  <article id="Booking-area">
    <div class="container" onmouseover="check_required();is_button_clicked()">
      <div class="title">
        <h1>BOOKING</h1>
      </div>
      <form method="POST" action="processing.php">
        <div class="row">
          <div class="col">
            <input type="hidden" name="movie[id]" class="movie-day_time" id="movie-title1">
            <input type="hidden" name="movie[day]" class="movie-day_time" id="day1">
            <input type="hidden" name="movie[hour]" class="movie-day_time" id="time1">

            <p class="movie-day_time" id="movie-title"></p>
            <p class="movie-day_time" id="day"></p>
            <p class="movie-day_time" id="time"></p>
            <p id="reminder_of_pressed_button"></p>

          </div>
        </div>
        <div class="row" style="text-align: left;">
          <div class="col-1"></div>
          <div class="col">
            <div class="seat" style="border: black solid; padding-left: 20px; padding-top: 10px;">
              <p class="seat-class">First Class</p>
              <div class="form-group">


                <label for="FCA" id="label">Adults</label>

                <select name="seats[FCA]" id="seats-FCA" class="form-control"
                  onchange="lock_input(id);check_and_givefeedback();calc(id);" onfocus="pricecalc(id)">
                  <option value="">Please Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>

                </select>

                <p class="warning" id="6"></p>
              </div>
              <div class="form-group">

                <label for="FCP" id="label">Concession</label>



                <select name="seats[FCP]" id="seats-FCP" class="form-control"
                  onchange="lock_input(id);calc(id);check_and_givefeedback();" onblur="pricecalc(id)">
                  <option value="">Please Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>

                </select>

                <p class="warning" id="2"></p>
              </div>
              <div class="form-group">


                <label for="FCC" id="label">Children</label>


                <select name="seats[FCC]" id="seats-FCC" class="form-control"
                  onchange="lock_input(id);calc(id);check_and_givefeedback();" onblur="pricecalc(id)">
                  <option value="">Please Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>


                <p id="4" class="warning"></p>
              </div>

            </div>
            </br>
            </br>
            <div class="seat" style="border: black solid; padding-left: 20px; padding-top: 10px;">
              <p class="seat-class">Standard Class</p>
              <div class="form-group">

                <label for="STA" id="label">Adults</label>


                <select name="seats[STA]" id="seats-STA" class="form-control"
                  onchange="lock_input(id);check_and_givefeedback();calc(id)" onblur="pricecalc(id)">
                  <option value="">Please Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>


                <p class="warning" id="3"></p>
              </div>
              <div class="form-group">

                <label for="STP" id="label">Concession</label>


                <select name="seats[STP]" id="seats-STP" class="form-control"
                  onchange="lock_input(id);check_and_givefeedback();calc(id)" onblur="pricecalc(id)">
                  <option value="">Please Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>


                <p class="warning" id="1"></p>
              </div>
              <div class="form-group">

                <label for="STC" id="label">Child</label>


                <select name="seats[STC]" id="seats-STC" class="form-control"
                  onchange="lock_input(id);check_and_givefeedback();calc(id)" onblur="pricecalc(id)">
                  <option value="">Please Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>


                <p class="warning" id="5"></p>
              </div>


            </div>
            <div class="price_total">
              <div class="row">
                <div class="col-8" style="padding-right: 0px;">
                  <p class="label_form ">Total</p>
                </div>
                <div class="col-3" style="padding-left: 0px;">
                  <p class="ticket_price " id="ticket_price"></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col" style="padding-top: 125px;">

            <div class="form-group">

              <label for="Name" id="label">Name</label>


              <input name="cust[name]" type="text" id="name" cols="1" rows="1" class="form-control" placeholder="e.g. Gerard 't Hooft"
                onchange="check_regex_name(id)"></input>

              <p class="warning" id="feedback-messages_1"></p>
              <span class="warning">* <?php echo $error_name; ?></span>
            </div>
            <div class="form-group">

              <label for="Email" id="label">Email</label>


              <input type="email" name="cust[email]" id="email" class="form-control" placeholder="e.g. xxxxxxx@gmail.com" onchange="check_regex_email(id)">

              <p class="warning" id="feedback-messages_2"></p>
              <span class="warning">* <?php echo $error_email; ?></span>

            </div>
            <div class="form-group">

              <label for="Mobile" id="label">Mobile</label>


              <input type="tel" name="cust[mobile]" id="mobile" class="form-control"  placeholder="e.g. (+614) 1234 5678" onchange="check_regex_mobile(id)">

              <p class="warning-messages" id="feedback-messages_3"></p>
              <span class="warning">* <?php echo $error_mobile; ?></span>

            </div>
            <div class="form-group">

              <label for="Credit" id="label">Credit Card</label>


              <input type="text" name="cust[card]" id="credit-card" class="form-control" placeholder="e.g 1234 5678 9876 5431" onchange="check_regex_tel(id)">



              <p class="warning-messages" id="feedback-messages_4"></p>
              <span class="warning">* <?php echo $error_card; ?></span>

            </div>
            <div class="Expiry-date">
              <div class="form-group">

                <label for="Date-time" id="label">Date and Time</label>


                <input type="month" name="cust[expiry]" id="Date-time" class="form-control">


                <p class="warning-messages" id="feedback-messages_5"></p>
                <span class="warning"><?php echo $error_date; ?></span>

              </div>
            </div>
            <div class="submit" style="text-align: right; padding-right: 30px;">
              <input type="submit" name="order" value="Order" class="dark"></input>
            </div>
          </div>
          <div class="col-1"></div>

        </div>
      </form>
    </div>
  </article>
  <script src="script.js"></script>

  <main>
    <article id='Website Under Construction'>
      <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
      <img src='photos//picture.png' alt='Website Under Construction' width="100%" height="100%" />
    </article>
  </main>

  <footer>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> NGUYEN TAN SONG HAO,S3817884.NGO VAN DAT, S3817813. ASSIGNMENT TEAM 11 Last modified 16:00 April
      17<sup>th</sup> 2020.
      <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
      Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>
  <?php
    echo "$color";
    preShow($_GET);
    echo "<h1>InPut: </h1>";
    check_post_data($_POST);
    echo $_POST['cust']['email'];
    printMyCode();
    preShow($_SESSION);
  ?>
</body>

</html>