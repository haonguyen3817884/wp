<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bill_style.css">
</head>
<body>
<?php
include "tools.php";
if(empty($_SESSION['cart'])){
  header("location: index.php");
}
$seatStandard = array('A', 'B', 'C', 'H', 'I', 'J');
$seatVIP = array('D', 'E', 'F', 'G');
$arr = $_SESSION['cart'];
$arrSeat = $_SESSION['cart']['seats'];


if(isset($_GET['individual'])){
  foreach($arrSeat as $key => $value){
    if ($value != ""){
      $name = $arr['cust']['name'];
      $title = $array_movie['id'][$arr['movie']['id']];
      $time = $array_movie['hour'][$arr['movie']['hour']];
      $day = $arr['movie']['day'];
      if($key == 'FCA' || $key =='FCP' || $key =='FCC'){
        $pick_seatVIP = $seatVIP[array_rand($seatVIP,1)];
        unset($seatVIP[array_search($pick_seatVIP, $seatVIP)]);
        $seatRow = $pick_seatVIP;
        for($i = 1; $i<=(int)$value; $i++){
          $pick_seatVIP = $seatRow . $i;
          echo <<<"TICKETVIP"
          <div class="cardWrapVip" id="ticket">
            <div class="cardVip cardLeftVip">
              <h1><i>CINEMAX</i> <span>Cinema</span></h1>
              <div class="title">
                <h2>$title</h2>
                <span>movie</span>
              </div>
              <div class="name">
                <h2>$name</h2>
                <span>name</span>
              </div>
              <div class="seat">
                <h2>$pick_seatVIP</h2>
                <span>seat</span>
              </div>
              <div class="time">
                <h2>$day</h2>
                <span>day</span>
              </div>
              <div class="time">
                <h2>$time</h2>
                <span>time</span>
              </div>
              <div class="time">
                <h2>$key</h2>
                <span>type</span>
              </div>
            </div>
            <div class="cardVip cardRight">
              <div class ="vipText"><h1><i>VIP</i></h1></div>
              <div class="numberVip">
                <h3>$pick_seatVIP</h3>
                <span>seat</span>
              </div>
              <div class="barcode"></div>
            </div>
          </div>
TICKETVIP;
      }
    }
       else{
        $pick_seatStandard = $seatStandard[array_rand($seatStandard,1)];
        unset($seatStandard[array_search($pick_seatStandard, $seatStandard)]);
        $seatRow = $pick_seatStandard;
        for($i = 1; $i<=(int)$value; $i++){
          $pick_seatStandard = $seatRow . $i;
        echo <<<"TICKET"
        <div class="cardWrap" id="ticket">
          <div class="card cardLeft">
            <h1><i>CINEMAX</i> <span>Cinema</span></h1>
            <div class="title">
              <h2>$title</h2>
              <span>movie</span>
            </div>
            <div class="name">
              <h2>$name</h2>
              <span>name</span>
            </div>
            <div class="seat">
              <h2>$pick_seatStandard</h2>
              <span>seat</span>
            </div>
            <div class="time">
              <h2>$day</h2>
              <span>day</span>
            </div>
            <div class="time">
              <h2>$time</h2>
              <span>time</span>
            </div>
            <div class="time">
              <h2>$key</h2>
              <span>type</span>
            </div>
          </div>
          <div class="card cardRight">
            <div class="eye"></div>
            <div class="number">
              <h3>$pick_seatStandard</h3>
              <span>seat</span>
            </div>
            <div class="barcode"></div>
          </div>
        
        </div>
TICKET;
        }
      }
    }
    }
    
}
else if(isset($_GET['group'])){
  $the_name_t = $arr['cust']['name'];
  $the_title_t = $array_movie['id'][$arr['movie']['id']];
  $the_time_t = $array_movie['hour'][$arr['movie']['hour']];
  $the_day_t = $arr['movie']['day'];
echo <<<"TICKET"
    <div class="cardWrap" id="ticket">
      <div class="card cardLeft">
        <h1><i>CINEMAX</i> <span>Cinema</span></h1>
        <div class="title">
          <h2>$the_title_t</h2>
          <span>movie</span>
        </div>
        <div class="name">
          <h2>$the_name_t</h2>
          <span>name</span>
        </div>
        <div class="seat">
          <h2>$the_day_t</h2>
          <span>day</span>
        </div>
        <div class="time">
          <h2>$the_time_t</h2>
          <span>time</span>
        </div>
        <div class="time">
          <h2></h2>
          <span></span>
        </div>
TICKET;


      echo  "<div class='seat'>";
          echo"<h2>";
          foreach($arrSeat as $key => $value){
            if ($value != ""){
              echo $key.":"." ".$value;
              echo "; ";
            }
          }
          echo"</h2>";
         echo"<span>seat</span>";
        echo"</div>";
      echo <<<"TICKET"
      </div>
      <div class="card cardRight">
        <div class="eye"></div>
        <div class="number">
          <h3></h3>
          <span>seat</span>
        </div>
        <div class="barcode"></div>
      </div>
    
    </div>
TICKET;
} 


  
   
  

   

?>

</body>
</html>