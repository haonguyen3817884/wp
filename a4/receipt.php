<?php
    include "tools.php";
    session_start();
    if(empty($_SESSION['cart'])){
        header("location: processing.php");
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
        echo $_SESSION['cart']['seats']['FCA'];
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

        $array_movie = array("id" => array('AMN' => 'Dumbo', 'AHF' => 'The Happy Prince', 'RMC' => 'Top End Wedding', 'ACT' => 'Avengers: Endgame'),'day' => array('WED' =>'wednesday','MON'=> 'monday', 'TUE' => 'tuesday', 'THU' => 'thursday', 'FRI' =>'friday', 'SAT' => 'saturday', 'SUN' => 'sunday'), 'hour' => array('T12' => '12:00 pm', 'T15' =>'3:00 pm','T18' => '6:00 pm', 'T21' => '9:00 pm'), 'seats'=>array('FCA'=>'First Class Adult','FCP'=>'First Class Concession','FCC'=>'First Class Children','STA'=>'Standard Class Adult','STC'=>'Standard Class Children','STP'=>'Standard Class Concession'));
        $array_happy_days = array('WED','MON');
        $array_week_days = array('THU','FRI','TUE');
        $array_the = array('SAT', 'SUN');
        $array_price = array('discount'=>array('FCA' => 24.00,'FCP' => 22.50,'FCC' => 21.00,'STA' => 14.00,'STP' => 12.00,'STC' => 11.00),'full'=>array('FCA' => 30.00,'FCP' => 27.00,'FCC' => 24.00,'STA' => 19.80,'STP' => 17.50,'STC' => 15.30));            
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
echo $price;
        

    }

   











?>