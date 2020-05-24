<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script_top.js"></script>
</head>
<body>
    <?php 
$array_movie = array("id" => array('ANM' => 'Dumbo', 'AHF' => 'The Happy Prince', 'RMC' => 'Top End Wedding', 'ACT' => 'Avengers: Endgame'),'day' => array('WED' =>'wednesday','MON'=> 'monday', 'TUE' => 'tuesday', 'THU' => 'thursday', 'FRI' =>'friday', 'SAT' => 'saturday', 'SUN' => 'sunday'), 'hour' => array('T12' => '12:00 PM', 'T15' =>'3:00 PM','T18' => '6:00 PM', 'T21' => '9:00 PM'), 'seats'=>array('FCA'=>'First Class Adult','FCP'=>'First Class Concession','FCC'=>'First Class Children','STA'=>'Standard Class Adult','STC'=>'Standard Class Children','STP'=>'Standard Class Concession'));
$movieObject = [
    'ACT'=>[
        'title' => 'Avenger: Endgame',
        'rating' => 'PG',
        'description' => "
        Following Avengers: Infinity War, after Thanos's snap, nearly 50% of all living creatures has gone. Members of The Avengers is trying to gather to find Thanos and undo what he did. However, they finally realize that their only hope is gone when Thanos has destroyed all the infinity stones. 5 years after Thanos's death, Scott Lang who is considered dead luckily get back from quantumn realm and bring the second chance to save people who're gone because of Thanos's snap.",
        'url' => 'https://www.youtube.com/embed/9tKr3m6r9NI',
        'screening' => [
            'WED' => 'T21',
            'THU' => 'T21',
            'FRI' => 'T21',
            'SAT' => 'T18',
            'SUN' => 'T18',
        ]
        ],
    'RMC'=>[
        'title' => 'Top-end Wedding',
        'rating' => 'NR',
        'description' => "This Comedy movie talks about a fanstatic road trip taken by Lauren and Ned. The couples have only 10 days to find Lauren's mother who has gone missing and have a wedding. The trip brought amazing experiences to the couples and also helped them know more about their partners.",
        'url' => 'https://www.youtube.com/embed/uoDBvGF9pPU',
        'screening' => [
            'MON' => 'T18',
            'TUE' => 'T18',
            'SAT' => 'T15',
            'SUN' => 'T15',

        ]
        ],
    'ANM'=>[
        'title' => 'Dumbo',
        'rating' => 'PG',
        'description' => "Based on a movie of the same name in 1941, the movie tells a story of a young elephant. With his oversized ears, he accidentally found that by flapping them he is able to fly. Thanks to that, the circus where he performs is getting more popular. Mr. Vandevere who is a very famous entrepreneur in New York also pays attention to it. He wants Dumbo to perform in his park.",
        'url' => 'https://www.youtube.com/embed/7NiYVoqBt-8',
        'screening' => [
            'MON' => 'T12',
            'TUE' => 'T12',
            'WED' => 'T18',
            'THU' => 'T18',
            'FRI' => 'T18',
            'SAT' => 'T12',
            'SUN' => 'T12',
        ]
        ],
    'AHF'=>[
        'title' => 'The Happy Prince',
        'rating' => 'R',
        'description' => "The movie tells a story of Oscar Wilde who is irish poet and playwright in the 19th century. He was in jail for being a homosexual man for two years. After that, he spends his last days in exile. That is also when the film gets started. Immersing himself in drugs and wines, he is now looking at his failures and difficulties with what defined him",
        'url' => 'https://www.youtube.com/embed/JHeOo0UGrbY',
        'screening' => [
            'WED' => 'T12',
            'THU' => 'T12',
            'FRI' => 'T12',
            'SAT' => 'T21',
            'SUN' => 'T21',
        ]
        ],
    ];
$dayHour = [
    'ACT' => [
        'Wednesday - Friday' => '21:00pm',
        'Saturday - Sunday' => '18:00pm',
    ],
    'RMC' => [
        'Monday - Tuesday' => '18:00pm',
        'Saturday - Sunday' => '18:00pm',
    ],
    'ANM' => [
        'Monday - Tuesday' => '12:00pm',
        'Wednesday - Friday' => '18:00pm',
        'Saturday - Sunday' => '12:00pm',
    ],
    'AHF' => [
        'Wednesday - Friday' => '12:00pm',
        'Saturday - Sunday' => '21:00pm',
    ]
    
];


session_start();

function php2js( $arr, $arrName ) {

    $lineEnd="";

    echo "<script>\n";

    echo "/* Generated with A4's php2js() function */";

    echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);

    echo "</script>\n\n";

}

    $color = 'red';
    function preShow($arr, $returnasastring=false){
        $remember = "<pre>".print_r($arr,true)."</pre>";
        if($returnasastring){
            return $remember;
        }
        else{
            echo $remember;
        }
    }
    function printMyCode() {

        $lines = file($_SERVER['SCRIPT_FILENAME']);

        echo "<pre class='mycode'><ol>";

        foreach ($lines as $line)

               echo '<li>'.rtrim(htmlentities($line)).'</li>';

        echo '</ol></pre>';

  }
  
  function check_post_data($data){
    global $error_name, $error_card, $error_mobile, $error_email, $error_date;
    global $count_seat, $count_name, $count_card, $count_email, $count_mobile, $count_expiry, $count_id, $count_day, $count_time;
    global $count_total;
    global $is_data_ok;
    $count_seat = 0;
    $count_card = 0;
    $count_email = 0;
    $count_mobile=0;
    $count_name = 0;
    $count_total = 0;
    $count_expiry = 0;
    $count_day = 0;
    $count_id = 0;
    $count_time = 0;
    foreach ($data as $key => $value){
        foreach ($data[$key] as $key1 => $value1){
            $validate = trim($data[$key][$key1]);
            $validate = htmlspecialchars($validate);
            $validate = filter_var($validate, FILTER_SANITIZE_STRING);
            echo "+ Your ".$key." [".$key1."]"." has this value".": "."<em>".$validate."</em>";
            echo "</br>";
            if($key == "movie"){
                if ($key1 == 'id'){
                    if(!preg_match("/^[A-Z]*$/", $validate)){
                        $count_id = 0;
                    }
                    else{
                        $count_id = 1;

                    }
                }
                else if ($key1 == 'day'){
                    if(!preg_match("/^[A-Z]*$/", $validate)){
                        $count_day = 0;
                    }
                    else{
                        $count_day = 1;
                    }
                }
                else if ($key1 == 'hour'){
                    if(!preg_match("/^[A-Z0-9]*$/", $validate)){
                        $count_time = 0;
                    }
                    else{
                        $count_time = 1;
                    }
                }

            }
            else if ($key == "seats"){
                if(filter_var($validate, FILTER_VALIDATE_INT)){
                    $count_seat = 1;
                }
            }
            else{
                if ($key1 == 'name'){
                    if(!preg_match("/^([A-Za-z'.-]+  ?)*[A-Za-z'.-]+([' ']+|)$/", $validate)){
                        $error_name = "Invalid.";
                        echo "<script>";
                        echo "document.getElementById('name').value ="."'".$validate."'";
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
                        echo "document.getElementById('email').value ="."'".$validate."'";
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
                        echo "document.getElementById('credit-card').value ="."'".$validate."'";
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
                        echo "document.getElementById('mobile').value ="."'".$validate."'";
                        echo "</script>";
                        $count_mobile = 0;

                    }
                    else{
                        $error_mobile = "";
                        $count_mobile = 1;

                    }
                }
                else if ($key1 == 'expiry'){
                    $array_date = explode("-",$validate);
                    if($array_date[0] > date("Y")){
                        $error_date = "";
                        $count_expiry = 1;
                    }
                    else{
                        if($array_date[0] == date("Y")){
                            if($array_date[1] >= date("m")){
                                $error_date = "";
                                $count_expiry = 1;
                            }
                            else{
                                $error_date = "Invalid";
                                echo "<script>";
                                echo "document.getElementById('Date-time').value ="."'".$validate."'";
                                echo "</script>";
                                $count_expiry = 0;
                            }
                        }
                        else{
                            $error_date = "Invalid.";
                            echo "<script>";
                            echo "document.getElementById('Date-time').value ="."'".$validate."'";
                            echo "</script>";
                            $count_expiry = 0;
                        }
                    }
                }
            }
        }
    }
    $count_total = $count_card + $count_mobile + $count_seat + $count_email + $count_name + $count_expiry + $count_id + $count_day + $count_time; 
    if($count_total == 9){
        $is_data_ok = 'ok';
    }
    else{
        $is_data_ok = 'not ok';
    }
  }
  function add_to_cart($post){
      $_SESSION['cart'] = $post; 
  }
  
  function moviePanel($first, $second){
    global $movieObject;
    $title1 = $movieObject[$first]['title'];
    $title2 = $movieObject[$second]['title'];
    $link1 = "#synopsis" . $first;
    $link2 = "#synopsis" . $second;
    $buttonID1 = $first . '-button';
    $buttonID2 = $second . '-button';
    $id1 = $first . '_time';
    $id2 = $second . '_time';
    $show1 = 'show' . $first . '()';
    $show2 = 'show' . $second . '()';
    $titleId1 = $first . '-title';
    $titleId2 = $second . '-title';

    echo <<<"PANEL"
    <div class="movie-panel">
        <div class="row">
          <!--first column-->
          <div class="col" style="text-align: center;">
            <div class="movies-poster-cards" id="moviePanelAMN">
              <div class="card" style=" padding: 20px; border: solid;">
                <div class="row no-gutters">
                  <div class="col">
                    <img class="card-img-left" src="photos/$first.jpg" alt="poster-image" width="260" height="312">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      <h1 class="card-title" id="$titleId1">$title1</h1>
                      <div class="card-text">
                        <p><strong>Time</strong></p>
                        <p class="card-text" id=$id1></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a href="$link1" id="$buttonID1" class="buttons" onclick=" getSynopsis(this.id);update_movieID(id)">Movie Detail</a>
            </div>
          </div>
          <!--second column-->
          <div class="col" style="text-align: center;">
            <div class="movies-poster-cards" id="moviePanelAHF">
              <div class="card" style=" padding: 20px; border: solid;">
                <div class="row no-gutters">
                  <div class="col">
                    <img class="card-img-left" src="photos/$second.jpg" alt="poster-image" width="260"
                      height="312">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      <h1 class="card-title" id="$titleId2">$title2</h1>
                      <div class="card-text">
                        <p><strong>Time</strong>:</p>
                        <p class="card-text" id=$id2></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a href="$link2" id="$buttonID2" class="buttons" onclick="getSynopsis(this.id) ;update_movieID(id)">Movie
                Detail</a>
            </div>
          </div>
        </div>
      </div>
PANEL;
}



function synopsis($first){
  global $movieObject;
  $title = $movieObject[$first]['title'];
  $content = $movieObject[$first]['description'];
  $url = $movieObject[$first]['url'];
  $id = 'synopsis' . $first;
  $buttonid1 = $first . '-button1';
  $buttonid2 = $first . '-button2';
  $buttonid3 = $first . '-button3';
  $buttonid4 = $first . '-button4';
  $buttonid5 = $first . '-button5';
  $buttonid6 = $first . '-button6';
  $buttonid7 = $first . '-button7';
  echo <<<"SYNOPSIS"
  <div class="panel toggle" id="$id">
    <div class="row">
      <div class="col">
        <div class="movie-title">
          <p class="left-site">$title</p>
          <p class="right-site">
            <P>PG</P>
          </p>
        </div>
        <p class="plot">Plot Description:</p>
        <p class="line"> <u>$content</u></p>
      </div>
      <div class="col">
        <div class="video">
          <iframe width="550" height="300" src="$url" frameborder="0"
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
          <a href="#Booking-area" class="booking-links" id="$buttonid1" onclick="select_movie(id)"></a>
          <a href="#Booking-area" class="booking-links" id="$buttonid2" onclick="select_movie(id)"></a>
          <a href="#Booking-area" class="booking-links" id="$buttonid3" onclick="select_movie(id)"></a>
          <a href="#Booking-area" class="booking-links" id="$buttonid4" onclick="select_movie(id)"></a>
          <a href="#Booking-area" class="booking-links" id="$buttonid5" onclick="select_movie(id)"></a>
          <a href="#Booking-area" class="booking-links" id="$buttonid6" onclick="select_movie(id)"></a>
          <a href="#Booking-area" class="booking-links" id="$buttonid7" onclick="select_movie(id)"></a>
        </div>
      </div>
    </div>
  </div>
  <script>
  synopsisButton("$first");
  hideBlankContent();
  </script>
SYNOPSIS;
}
    ?>
  

</body>
</html>