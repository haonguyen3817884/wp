<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
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
    <title>Document</title>
    <style>
     /* change the margins as you want them to be. */
}
    </style>
</head>
<body style="background-color: black;">
<?php
include "tools.php";
session_start();
if(empty($_SESSION['cart'])){
    header("location: index.php");
}
else{
    foreach ($_SESSION as $key => $value){
        foreach ($_SESSION[$key] as $key2 => $value2){
            foreach ($_SESSION[$key][$key2] as $the_key => $the_value){
                $posted_data = $_SESSION[$key][$key2][$the_key];
                $array_converted[$the_key] = $posted_data;
            }
        }
    }
    $file_name = "post-date.csv";
    $fp = fopen($file_name,"w");
    flock($fp, LOCK_EX);
    
    fputcsv($fp, array_keys($array_converted));
        
     
    fputcsv($fp, $array_converted);

    flock($fp, LOCK_UN);
    fclose($fp);

    
    $random_data = array( 
        array("abc, efg, jhi, klm","test1, test2, test3, test4"), 
        array("123, 456, 789"), 
        array("11aa, 22bb, 33cc, 44dd") 
        ); 
          
        // opening the file "data.csv" for writing 
    $myfile = fopen("testing.csv", "w"); 
          
        // formatting each row of data in CSV format  
        // and outputting it 
    foreach ($random_data as $line) 
        { 
            fputcsv($myfile, $line); 
        } 
          
        // closing the file 
        fclose($myfile); 
   $array_happy_days = array('WED','MON');
    $array_week_days = array('THU','FRI','TUE');
    $array_the = array('SAT', 'SUN');
    $array_price = array('discount'=>array('FCA' => 24.00,'FCP' => 22.50,'FCC' => 21.00,'STA' => 14.00,'STP' => 12.50,'STC' => 11.00),'full'=>array('FCA' => 30.00,'FCP' => 27.00,'FCC' => 24.00,'STA' => 19.80,'STP' => 17.50,'STC' => 15.30));            
    $price = 0;
foreach ($_SESSION['cart']['seats'] as $key => $value){
if(in_array($_SESSION['cart']['movie']['day'], $array_happy_days)){
    if($_SESSION['cart']['seats'][$key] == ""){
        $price = $price + 0;
    }
    else{
        $each = $array_price['discount'][$key];
        $number_converted = (int)$_SESSION['cart']['seats'][$key];
        $price = $price + $each*$number_converted;
    }
}
else if(in_array($_SESSION['cart']['movie']['day'], $array_week_days)){
    if($_SESSION['cart']['movie']['hour'] == 'T12'){
      if($_SESSION['cart']['seats'][$key] == ""){
        $price = $price + 0;
    }
    else{
        $each = $array_price['discount'][$key];
        $number_converted = (int)$_SESSION['cart']['seats'][$key];
        $price = $price + $each*$number_converted;
    }
    }
    else{
      if($_SESSION['cart']['seats'][$key] == ""){
        $price = $price + 0;
    }
    else{
        $each = $array_price['full'][$key];
        $number_converted = (int)$_SESSION['cart']['seats'][$key];
        $price = $price + $each*$number_converted;
    }
    } 
}
else{
  if($_SESSION['cart']['seats'][$key] == ""){
    $price = $price + 0;
}
else{
    $each = $array_price['full'][$key];
    $number_converted = (int)$_SESSION['cart']['seats'][$key];
    $price = $price + $each*$number_converted;
}
}
}
    

}
$array_price = array('discount'=>array('FCA' => 24.00,'FCP' => 22.50,'FCC' => 21.00,'STA' => 14.00,'STP' => 12.50,'STC' => 11.00),'full'=>array('FCA' => 30.00,'FCP' => 27.00,'FCC' => 24.00,'STA' => 19.80,'STP' => 17.50,'STC' => 15.30));            
function caculatePrice($arr, $type){
  global $finalEachPrice;
  global $price_each;
  $array_happy_days = array('WED','MON');
  $array_week_days = array('THU','FRI','TUE');
  $array_price = array('discount'=>array('FCA' => 24.00,'FCP' => 22.50,'FCC' => 21.00,'STA' => 14.00,'STP' => 12.50,'STC' => 11.00),'full'=>array('FCA' => 30.00,'FCP' => 27.00,'FCC' => 24.00,'STA' => 19.80,'STP' => 17.50,'STC' => 15.30));            
  $finalEachPrice = 0;
  $day = $arr['day'];
  $hour = $arr['hour'];
  if (in_array($day, $array_happy_days)){
    $price_each = $array_price['discount'][$type];
    $finalEachPrice = $price_each * (int)$arr[$type];
}else if(in_array($day, $array_week_days) && $hour == 'T12'){
  $price_each = $array_price['discount'][$type];
    $finalEachPrice = $price_each * (int)$arr[$type];
}else{
  $price_each = $array_price['full'][$type];
    $finalEachPrice = $price_each * (int)$arr[$type];
}
}
?>
<?php
$array_movie = array("id" => array('ANM' => 'Dumbo', 'AHF' => 'The Happy Prince', 'RMC' => 'Top End Wedding', 'ACT' => 'Avengers: Endgame'),'day' => array('WED' =>'wednesday','MON'=> 'monday', 'TUE' => 'tuesday', 'THU' => 'thursday', 'FRI' =>'friday', 'SAT' => 'saturday', 'SUN' => 'sunday'), 'hour' => array('T12' => '12:00 PM', 'T15' =>'3:00 PM','T18' => '6:00 PM', 'T21' => '9:00 PM'), 'seats'=>array('FCA'=>'First Class Adult','FCP'=>'First Class Concession','FCC'=>'First Class Children','STA'=>'Standard Class Adult','STC'=>'Standard Class Children','STP'=>'Standard Class Concession'));
$array_description = array('FCA' => 'First Class Adult','FCP' => 'First Class Concession','FCC' => 'First Class Child','STA' => 'Standard Adult','STP' => 'Standard Concession','STC' => 'Standard Child');
$arr = $array_converted;
$movieId = $arr['id'];
$title = $array_movie['id'][$movieId];
$day = $arr['day'];
$hour = $array_movie['hour'][$arr['hour']];
$name = $arr['name'];
$email = $arr['email'];
$phone = $arr['mobile'];
$id = $arr['id'];
$card = substr($arr['card'], -4);
$subprice = number_format($price,2);
$tax = number_format($price * (1/11), 2);
$total = number_format($price + $tax,2);
echo <<<"RECEIPT_TOP"
        <div class="container" style="width: 21cm; height: 29.7cm;">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row p-5">
                            <div class="col-md-6">
                                <img src="../a4/photos/870943.png" style="width: 150px;">
                            </div>
    
                            <div class="col text-right">
                                <p class="font-weight-bold mb-1">Invoice #550</p>
                                <p class="text-muted">Due to: 4 Dec, 2019</p>
                            </div>
                        </div>
    
                        <hr class="my-5">
    
                        <div class="row pb-5 p-5">
                            <div class="col">
                                <p class="font-weight-bold mb-4">Client Information</p>
                                <p class="mb-1">Name: $name</p>
                                <p class="mb-1">Phones: $phone</p>
                                <p class="mb-1">Email: $email</p>
                                <p class="mb-1">Credit: ****$card</p>
                            </div>
    
                            <div class="col text-right">
                                <p class="font-weight-bold mb-4">Payment Details</p>
                                <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                                <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                                <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                                <p class="mb-1"><span class="text-muted">Name: </span> CINEMAX</p>
                            </div>
                        </div>
                    
                        <div class="row pb-5 p-5" style="padding-bottom: 0 !important;">
                        <div class="col">
                            <p class="font-weight-bold mb-4">Movie Information</p>
                            <p class="mb-1">Movie Title: $title</p>
                            <p class="mb-1">Day: $day</p>
                            <p class="mb-1">Hour: $hour</p>
                        </div>
                        </div>
                
                        <div class="row p-5">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
RECEIPT_TOP;
foreach($_SESSION['cart']['seats'] as $key => $value){
if ($value != ''){
$i +=1;
$description = $array_description[$key];
caculatePrice($arr, $key);
$price_each = number_format($price_each,2);
$finalEachPrice = number_format($finalEachPrice,2);
echo <<<"ITEM"
<tr>
                                            <td>$i</td>
                                            <td>$key</td>
                                            <td>$description</td>
                                            <td>$value</td>
                                            <td>$$price_each</td>
                                            <td>$$finalEachPrice</td>
                                        </tr>

ITEM;
}
}            
echo <<<"RECEIPT_BOTTON"
</tbody>
</table>
                            </div>
                        </div>
    
                        <div class="d-flex flex-row-reverse bg-dark text-white p-4" style = "background-color: #d2ac47!important;">
                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Grand Total</div>
                                <div class="h2 font-weight-light">$$total</div>
                            </div>
    
                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Tax Invoice</div>
                                <div class="h2 font-weight-light">$$tax</div>
                            </div>
    
                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Sub - Total</div>
                                <div class="h2 font-weight-light">$$subprice</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="ticket.php">
 <button>Print Individual Ticket</button>
 </form>
    </div>
    
RECEIPT_BOTTON;
 ?>   
 
</body>
</html>