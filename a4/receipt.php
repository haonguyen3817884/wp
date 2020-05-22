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

        
            
        

    }

   











?>