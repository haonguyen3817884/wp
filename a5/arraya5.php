<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $array_name = array(
        'FA' => array('FAA' => array('FAA1' => 'T-Shirt1', 'FAA2'=>'T-Shirt2', 'FAA3' =>'T-Shirt3', 'FAA4' => 'T-Shirt4', 'FAA5'=> 'T-Shirt5'),
                      'FAB' => array('FAB1' => 'Pants1', 'FAB2'=>'Pants2', 'FAB3' =>'Pants3', 'FAB4' => 'Pants4', 'FAB5'=> 'Pants5'), 
                      'FAC' => array('FAC1' => 'Shoes1', 'FAC2'=>'Shoes2', 'FAC3' =>'Shoes3', 'FAC4' => 'Shoes4', 'FAC5'=> 'Shoes5')), 
        'TY' => array('TYA' => array('TYA1' => '', 'TYA2'=>'', 'TYA3' =>'', 'TYA4' => '', 'TYA5'=> ''), 
                      'TYB' => array('TYB1' => '', 'TYB2'=>'', 'TYB3' =>'', 'TYB4' => '', 'TYB5'=> ''), 
                      'TYC' => array('TYC1' => '', 'TYC2'=>'', 'TYC3' =>'', 'TYC4' => '', 'TYC5'=> '')),
        'SP' => array('SPA' => array('SPA1' => '', 'SPA2'=>'', 'SPA3' =>'', 'SPA4' => '', 'SPA5'=> ''), 
                      'SPB' => array('SPB1' => '', 'SPB2'=>'', 'SPB3' =>'', 'SPB4' => '', 'SPB5'=> ''), 
                      'SPC' => array('SPC1' => '', 'SPC2'=>'', 'SPC3' =>'', 'SPC4' => '', 'SPC5'=> '')),
        'CO' => array('COA' => array('COA1' => '', 'COA2'=>'', 'COA3' =>'', 'COA4' => '', 'COA5'=> ''), 
                      'COB' => array('COB1' => '', 'COB2'=>'', 'COB3' =>'', 'COB4' => '', 'COB5'=> ''), 
                      'COC' => array('COC1' => '', 'COC2'=>'', 'COC3' =>'', 'COC4' => '', 'COC5'=> '')),
        'FD' => array('FDA' => array('FDA1' => '', 'FDA2'=>'', 'FDA3' =>'', 'FDA4' => '', 'FDA5'=> ''),
                      'FDB' => array('FDB1' => '', 'FDB2'=>'', 'FDB3' =>'', 'FDB4' => '', 'FDB5'=> ''), 
                      'FDC' => array('FDC1' => '', 'FDC2'=>'', 'FDC3' =>'', 'FDC4' => '', 'FDC5'=> ''))
     );    
     $array_img_link =array(
        'FA' => array('FAA' => array('FAA1' => 'Clothes1.jpg', 'FAA2'=>'Clothes2.jpg', 'FAA3' =>'Clothes3.jpg', 'FAA4' => 'Clothes4.jpg', 'FAA5'=> 'Clothes5.jpg'),
                      'FAB' => array('FAB1' => 'Pants1.jpg', 'FAB2'=>'Pants2.jpg', 'FAB3' =>'Pants3.jpg', 'FAB4' => 'Pants4.jpg', 'FAB5'=> 'Pants5.jpg'), 
                      'FAC' => array('FAC1' => 'Shoes1.jpg', 'FAC2'=>'Shoes2.jpg', 'FAC3' =>'Shoes3.jpg', 'FAC4' => 'Shoes4.jpg', 'FAC5'=> 'Shoes5.jpg')), 
        'TY' => array('TYA' => array('TYA1' => '', 'TYA2'=>'', 'TYA3' =>'', 'TYA4' => '', 'TYA5'=> ''), 
                      'TYB' => array('TYB1' => '', 'TYB2'=>'', 'TYB3' =>'', 'TYB4' => '', 'TYB5'=> ''), 
                      'TYC' => array('TYC1' => '', 'TYC2'=>'', 'TYC3' =>'', 'TYC4' => '', 'TYC5'=> '')),
        'SP' => array('SPA' => array('SPA1' => '', 'SPA2'=>'', 'SPA3' =>'', 'SPA4' => '', 'SPA5'=> ''), 
                      'SPB' => array('SPB1' => '', 'SPB2'=>'', 'SPB3' =>'', 'SPB4' => '', 'SPB5'=> ''), 
                      'SPC' => array('SPC1' => '', 'SPC2'=>'', 'SPC3' =>'', 'SPC4' => '', 'SPC5'=> '')),
        'CO' => array('COA' => array('COA1' => '', 'COA2'=>'', 'COA3' =>'', 'COA4' => '', 'COA5'=> ''), 
                      'COB' => array('COB1' => '', 'COB2'=>'', 'COB3' =>'', 'COB4' => '', 'COB5'=> ''), 
                      'COC' => array('COC1' => '', 'COC2'=>'', 'COC3' =>'', 'COC4' => '', 'COC5'=> '')),
        'FD' => array('FDA' => array('FDA1' => '', 'FDA2'=>'', 'FDA3' =>'', 'FDA4' => '', 'FDA5'=> ''),
                      'FDB' => array('FDB1' => '', 'FDB2'=>'', 'FDB3' =>'', 'FDB4' => '', 'FDB5'=> ''), 
                      'FDC' => array('FDC1' => '', 'FDC2'=>'', 'FDC3' =>'', 'FDC4' => '', 'FDC5'=> ''))
     );    
     $array_pri = array(
        'FA' => array('FAA' => array('FAA1' => '9.00', 'FAA2'=> '9.00', 'FAA3' =>'9.00', 'FAA4' => '9.00', 'FAA5'=> '9.00'),
        'FAB' => array('FAB1' => '12.50', 'FAB2'=>'12.50', 'FAB3' =>'12.50', 'FAB4' => '12.50', 'FAB5'=> '12.50'), 
        'FAC' => array('FAC1' => '26.00', 'FAC2'=>'26.00', 'FAC3' =>'26.00', 'FAC4' => '26.00', 'FAC5'=> '26.00')), 
'TY' => array('TYA' => array('TYA1' => '', 'TYA2'=>'', 'TYA3' =>'', 'TYA4' => '', 'TYA5'=> ''), 
        'TYB' => array('TYB1' => '', 'TYB2'=>'', 'TYB3' =>'', 'TYB4' => '', 'TYB5'=> ''), 
        'TYC' => array('TYC1' => '', 'TYC2'=>'', 'TYC3' =>'', 'TYC4' => '', 'TYC5'=> '')),
'SP' => array('SPA' => array('SPA1' => '', 'SPA2'=>'', 'SPA3' =>'', 'SPA4' => '', 'SPA5'=> ''), 
        'SPB' => array('SPB1' => '', 'SPB2'=>'', 'SPB3' =>'', 'SPB4' => '', 'SPB5'=> ''), 
        'SPC' => array('SPC1' => '', 'SPC2'=>'', 'SPC3' =>'', 'SPC4' => '', 'SPC5'=> '')),
'CO' => array('COA' => array('COA1' => '', 'COA2'=>'', 'COA3' =>'', 'COA4' => '', 'COA5'=> ''), 
        'COB' => array('COB1' => '', 'COB2'=>'', 'COB3' =>'', 'COB4' => '', 'COB5'=> ''), 
        'COC' => array('COC1' => '', 'COC2'=>'', 'COC3' =>'', 'COC4' => '', 'COC5'=> '')),
'FD' => array('FDA' => array('FDA1' => '', 'FDA2'=>'', 'FDA3' =>'', 'FDA4' => '', 'FDA5'=> ''),
        'FDB' => array('FDB1' => '', 'FDB2'=>'', 'FDB3' =>'', 'FDB4' => '', 'FDB5'=> ''), 
        'FDC' => array('FDC1' => '', 'FDC2'=>'', 'FDC3' =>'', 'FDC4' => '', 'FDC5'=> ''))
     );
$array_translated = array('FA' => 'Fashion',
'TY' => 'Toy','CO' => 'Cosmestics','FD' => 'Food','SP' => 'Sport');
$array_translated_child = array('FAA' =>'Clothes',
                        'FAB' =>'Pants',
                        'FAC' =>'Shoes','TYA' =>'Electronic Toy','TYB' =>'Lego','TYC' =>'Plush Toy','FDC' =>'Candies','FDA' =>'Processed Food','FDB' =>'Drinks','SPA' =>'Fitness Equipment','SPC' =>'Protein Supplements','SPB' =>'Sport Accessories','COA' =>'Skincare Products','COB' =>'Makeup Products','COC' =>'Perfume',);



         function preShow($arr, $returnasastring=false){
         $remember = "<pre>".print_r($arr,true)."</pre>";
                 if($returnasastring){
                    return $remember;
                }
                else{
                    echo $remember;
                }
        }
    ?>
</body>
</html>