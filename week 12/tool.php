<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
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
            echo "your ".$key."[".$key1."]"." has this value".": "."<em>".$validate."</em>";
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
                        $error_name = "Invalid. Please retype!";
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
                        $error_email = "Invalid. Please retype!";
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
                        $error_card = "Invalid. Please retype!";
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
                        $error_mobile = "Invalid. Please retype!";
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
                                $error_date = "Invalid. Please retype!";
                                echo "<script>";
                                echo "document.getElementById('Date-time').value ="."'".$validate."'";
                                echo "</script>";
                                $count_expiry = 0;
                            }
                        }
                        else{
                            $error_date = "Invalid. Please retype!";
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
  }
  
  

    ?>
</body>
</html>