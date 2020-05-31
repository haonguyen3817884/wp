<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 


$servername = "localhost";
$username = "root";
$password = "root";
$port = 3306;
$dbName = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "" . $conn->error;
}
$sql = "CREATE TABLE product (
    productID VARCHAR(30),
    productName VARCHAR(300),
    productImage VARCHAR(300),
    productPrice VARCHAR(300),
    productType VARCHAR(300),
    productChilType VARCHAR(300),
    productDescription VARCHAR(1000)
  )";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "" . $conn->error;
}
 
    
// Create database

/*

$sql = "INSERT INTO product VALUES
   ('FAA1', 'Blue Shirt', 'Clothes1.jpg', '9.99', 'FA', 'FAA', ''),
   ('FAA2', 'PLAY T-Shirt', 'Clothes2.jpg', '9.99', 'FA', 'FAA', ''),
   ('FAA3', 'Adidas T-Shirt', 'Clothes3.jpg', '9.99', 'FA', 'FAA', ''),
   ('FAA4', 'Black T-Shirt', 'Clothes4.jpg', '9.99', 'FA', 'FAA', ''),
   ('FAA5', 'DEGREY T-Shirt', 'Clothes5.jpg', '9.99', 'FA', 'FAA', ''),
   ('FAB1', 'Cream Long Pants', 'Pants1.jpg', '12.50', 'FA', 'FAB', ''),
   ('FAB2', 'Black Long Pants', 'Pants2.jpg', '12.50', 'FA', 'FAB', ''),
   ('FAB3', 'Green Long Pants', 'Pants3.jpg', '12.50', 'FA', 'FAB', ''),
   ('FAB4', 'Light Green Long Pant', 'Pants4.jpg', '12.50', 'FA', 'FAB', ''),
   ('FAB5', 'Long Long Pants', 'Pants5.jpg', '12.50', 'FA', 'FAB', ''),
   ('FAC1', 'Vans', 'Shoes1.jpg', '70.00', 'FA', 'FAC', ''),
   ('FAC2', 'Brooks', 'Shoes2.jpg', '50.00', 'FA', 'FAC', ''),
   ('FAC3', 'Vans Slip-on', 'Shoes3.jpg', '80.00', 'FA', 'FAC', ''),
   ('FAC4', 'Nike Shoes', 'Shoes4.jpg', '90.00', 'FA', 'FAC', ''),
   ('FAC5', 'Nike Air', 'Shoes5.jpg', '180.00', 'FA', 'FAC', ''),
   ('TYA1', 'Electric Toy: Car', 'Electronic-toy1.jpg', '20.00', 'TY', 'TYA', ''),
   ('TYA2', 'Electric Toy: Motobike', 'Electronic-toy2.jpg', '18.00', 'TY', 'TYA', ''),
   ('TYA3', 'Electric Toy: Quad Bike', 'Electronic-toy3.jpg', '100.00', 'TY', 'TYA', ''),
   ('TYA4', 'Electric Toy: Cream Big Car', 'Electronic-toy4.jpg', '399.00', 'TY', 'TYA', ''),
   ('TYA5', 'Electric Toy: Black Big Car', 'Electronic-toy5.jpg', '399.00', 'TY', 'TYA', ''),
   ('TYB1', 'Lego: Toy Story 4', 'Lego-toy1.jpg', '30.00', 'TY', 'TYB', ''),
   ('TYB2', 'Lego: City', 'Lego-toy2.jpg', '25.00', 'TY', 'TYB', ''),
   ('TYB3', 'Lego: Super Pack', 'Lego-toy3.jpg', '30.00', 'TY', 'TYB', ''),
   ('TYB4', 'Lego: Toy Story 1', 'Lego-toy4.jpg', '999.00', 'TY', 'TYB', ''),
   ('TYB5', 'Lego: Wild Car', 'Lego-toy5.jpg', '90.00', 'TY', 'TYB', ''),
   ('TYC1', 'Plush Toy: Hug Dog', 'Plush-toy1.jpg', '9.99', 'TY', 'TYC', ''),
   ('TYC2', 'Plush Toy: Dog', 'Plush-toy2.jpg', '9.99', 'TY', 'TYC', ''),
   ('TYC3', 'Plush Toy: Bear', 'Plush-toy3.jpg', '9.99', 'TY', 'TYC', ''),
   ('TYC4', 'Plush Toy: Pig', 'Plush-toy4.jpg', '9.99', 'TY', 'TYC', ''),
   ('TYC5', 'Plush Toy: Monster', 'Plush-toy5.jpg', '9.99', 'TY', 'TYC', ''),
   ('SPA1', 'In House Bike', 'Fitness-equipment1.jpg', '100.00', 'SP', 'SPA', ''),
   ('SPA2', 'Smart Wonder Cone', 'Fitness-equipment2.jpg', '199.00', 'SP', 'SPA', ''),
   ('SPA3', 'Lifting Yoke', 'Fitness-equipment3.jpg', '90.00', 'SP', 'SPA', ''),
   ('SPA4', 'Functional Frame', 'Fitness-equipment4.jpg', '300.00', 'SP', 'SPA', ''),
   ('SPA5', 'Pull-up Bar', 'Fitness-equipment5.jpg', '70.00', 'SP', 'SPA', ''),
   ('SPB1', 'Protein Suppliment: WPI', 'Protein-supplement1.jpg', '99.99', 'SP', 'SPB', ''),
   ('SPB2', 'Protein Suppliment: BodyTech', 'Protein-supplement2.jpg', '99.99', 'SP', 'SPB', ''),
   ('SPB3', 'Protein Suppliment: NutraBio', 'Protein-supplement3.jpg', '99.99', 'SP', 'SPB', ''),
   ('SPB4', 'Protein Suppliment: Gold Standard', 'Protein-supplement4.jpg', '99.99', 'SP', 'SPB', ''),
   ('SPB5', 'Protein Suppliment: LeanFit', 'Protein-supplement5.jpg', '99.99', 'SP', 'SPB', ''),
   ('SPC1', 'Adidas Water Bottle', 'Sport-accessories1.jpg', '9.99', 'SP', 'SPC', ''),
   ('SPC2', 'Table Tennis Bats', 'Sport-accessories2.jpg', '39.99', 'SP', 'SPC', ''),
   ('SPC3', 'Knee Protectors', 'Sport-accessories3.jpg', '9.99', 'SP', 'SPC', ''),
   ('SPC4', 'Goalkeeper Gloves', 'Sport-accessories4.jpg', '99.99', 'SP', 'SPC', ''),
   ('SPC5', 'Golf Club', 'Sport-accessories5.jpg', '999.99', 'SP', 'SPC', ''),
   ('COA1', 'Makeup Kit', 'Makeup-product1.jpg', '999.00', 'CO', 'COA', ''),
   ('COA2', 'Shape Tape', 'Makeup-product2.jpg', '99.99', 'CO', 'COA', ''),
   ('COA3', 'Lipstick', 'Makeup-product3.jpg', '109.99', 'CO', 'COA', ''),
   ('COA4', 'Lipstick', 'Makeup-product4.jpg', '119.99', 'CO', 'COA', ''),
   ('COA5', 'Foundation', 'Makeup-product5.jpg', '129.99', 'CO', 'COA', ''),
   ('COB1', 'Perfume: Wild Stone', 'Perfume1.jpg', '99.99', 'CO', 'COB', ''),
   ('COB2', 'Perfume: Rose', 'Perfume2.jpg', '999.99', 'CO', 'COB', ''),
   ('COB3', 'Perfume: Lilac', 'Perfume3.jpg', '999.99', 'CO', 'COB', ''),
   ('COB4', 'Perfume: Skinn by Titan', 'Perfume4.jpg', '9999.99', 'CO', 'COB', ''),
   ('COB5', 'Perfume: New Dawn', 'Perfume5.jpg', '99999.99', 'CO', 'COB', ''),
   ('COC1', 'Skincare Hera', 'Skincare-product1.jpg', '99.99', 'CO', 'COC', ''),
   ('COC2', 'Body Bath', 'Skincare-product2.jpg', '17.99', 'CO', 'COC', ''),
   ('COC3', 'Ahava Body Bath', 'Skincare-product3.jpg', '79.99', 'CO', 'COC', ''),
   ('COC4', 'Veil', 'Skincare-product4.jpg', '109.99', 'CO', 'COC', ''),
   ('COC5', 'Luron', 'Skincare-product5.jpg', '999.99', 'CO', 'COC', ''),
   ('FDA1', 'Strawberry Candies', 'Candies1.jpg', '9.99', 'FD', 'FDA', ''),
   ('FDA2', 'Strawberry and Grapes Candies', 'Candies2.jpg', '9.99', 'FD', 'FDA', ''),
   ('FDA3', 'Dino Jelly', 'Candies3.jpg', '9.99', 'FD', 'FDA', ''),
   ('FDA4', 'Benny Choco', 'Candies4.jpg', '9.99', 'FD', 'FDA', ''),
   ('FDA5', 'Shock Candies', 'Candies5.jpg', '9.99', 'FD', 'FDA', ''),
   ('FDB1', 'Sprite', 'Drink1.jpg', '2.99', 'FD', 'FDB', ''),
   ('FDB2', 'Dalat Milk', 'Drink2.jpg', '6.99', 'FD', 'FDB', ''),
   ('FDB3', 'Fanta', 'Drink3.jpg', '2.99', 'FD', 'FDB', ''),
   ('FDB4', 'Sport Drink', 'Drink4.jpg', '2.99', 'FD', 'FDB', ''),
   ('FDB5', 'Fruit Drink', 'Drink5.jpg', '2.99', 'FD', 'FDB', ''),
   ('FDC1', 'Shin Ramyun', 'Processed-food1.jpg', '3.99', 'FD', 'FDC', ''),
   ('FDC2', 'Lau Thai Noddles', 'Processed-food2.jpg', '4.99', 'FD', 'FDC', ''),
   ('FDC3', 'Chicken Noddles', 'Processed-food3.jpg', '5.99', 'FD', 'FDC', ''),
   ('FDC4', 'Japan Noddles', 'Processed-food4.jpg', '8.99', 'FD', 'FDC', ''),
   ('FDC5', 'Nissin Noddles', 'Processed-food5.jpg', '9.99', 'FD', 'FDC', '')

";
    if (mysqli_query($conn, $sql)){
      echo "New record success";
    }else{
      echo "Error" . $sql ."</br>" . mysqli_error($conn);
    }


// sql to delete a record
$sql = "DELETE FROM product WHERE productID='FAA1'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}




*/










$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   
    $array_name[$row['productType']][$row['productChilType']][$row['productID']] = $row['productName'];
    $array_pri[$row['productType']][$row['productChilType']][$row['productID']] = $row['productPrice'];
    $array_img_link[$row['productType']][$row['productChilType']][$row['productID']] = $row['productImage'];
    $array_description[$row['productType']][$row['productChilType']][$row['productID']] = $row['productDescription'];
  }
} else {
  echo "0 results";
}



$conn->close();






/*
$array_name = array(
    'FA' => array('FAA' => array('FAA1' => 'Blue Shirt', 'FAA2'=>'PLAY T-Shirt', 'FAA3' =>'Adidas T-Shirt', 'FAA4' => 'Black T-Shirt', 'FAA5'=> 'DEGREY T-Shirt'),
                  'FAB' => array('FAB1' => 'Cream Long Pants', 'FAB2'=>'Black Long Pants', 'FAB3' =>'Green Long Pants', 'FAB4' => 'Light Green Long Pant', 'FAB5'=> 'Long Long Pants'),
                  'FAC' => array('FAC1' => 'Vans', 'FAC2'=>'Brooks', 'FAC3' =>'Vans Slip-on', 'FAC4' => 'Nike Shoes', 'FAC5'=> 'Nike Air')),
    'TY' => array('TYA' => array('TYA1' => 'Electric Toy: Car', 'TYA2'=>'Electric Toy: Motobike', 'TYA3' =>'Electric Toy: Quad Bike', 'TYA4' => 'Electric Toy: Cream Big Car', 'TYA5'=> 'Electric Toy: Black Big Car'),
                  'TYB' => array('TYB1' => 'Lego: Toy Story 4', 'TYB2'=>'Lego: City', 'TYB3' =>'Lego: Super Pack', 'TYB4' => 'Lego: Toy Story 1', 'TYB5'=> 'Lego: Wild Car'),
                  'TYC' => array('TYC1' => 'Plush Toy: Dog', 'TYC2'=>'Plush Toy: Dog', 'TYC3' =>'Plush Toy: Bear', 'TYC4' => 'Plush Toy: Pig', 'TYC5'=> 'Plush Toy: Moster')),
    'SP' => array('SPA' => array('SPA1' => 'In House Bike ', 'SPA2'=>'Smart Wonder Cone', 'SPA3' =>'Lifting Yoke', 'SPA4' => 'Functional Frame', 'SPA5'=> 'Pull-up Bar'),
                  'SPB' => array('SPB1' => 'Protein Suppliment: WPI', 'SPB2'=>'Protein Suppliment: BodyTech', 'SPB3' =>'Protein Suppliment: NutraBio', 'SPB4' => 'Protein Suppliment: Gold Standard', 'SPB5'=> 'Protein Suppliment: LeanFit'),
                  'SPC' => array('SPC1' => 'Adidas Water Bottle', 'SPC2'=>'Table Tennis Bats', 'SPC3' =>'Knee Protectors', 'SPC4' => 'Goalkeeper Gloves', 'SPC5'=> 'Golf Club')),
    'CO' => array('COA' => array('COA1' => 'Makeup Kit', 'COA2'=>'Shape Tape', 'COA3' =>'Lipstick', 'COA4' => 'Lipstick', 'COA5'=> 'Foundation'),
                  'COB' => array('COB1' => 'Perfume: Wild Stone', 'COB2'=>'Perfume: Rose', 'COB3' =>'Perfume: Lilac', 'COB4' => 'Perfume: Skinn by Titan', 'COB5'=> 'Perfume: New Dawn'),
                  'COC' => array('COC1' => 'Skincare Hera', 'COC2'=>'Body Bath', 'COC3' =>'Ahava Body Bath', 'COC4' => 'Veil', 'COC5'=> 'Luron')),
    'FD' => array('FDA' => array('FDA1' => 'Strawberry Candies', 'FDA2'=>'Strawberry and Grapes Candies', 'FDA3' =>'Dino Jelly', 'FDA4' => 'Benny Choco', 'FDA5'=> 'Shock Candies'),
                  'FDB' => array('FDB1' => 'Sprite', 'FDB2'=>'Dalat Milk', 'FDB3' =>'Fanta', 'FDB4' => 'Sport Drink', 'FDB5'=> 'Fruit Drink'),
                  'FDC' => array('FDC1' => 'Shin Ramyun', 'FDC2'=>'Lau Thai Noddles', 'FDC3' =>'Chicken Noddles', 'FDC4' => 'Japan Noddles', 'FDC5'=> 'Nissin Noddles'))
 );    
 $array_img_link =array(
    'FA' => array('FAA' => array('FAA1' => 'Clothes1.jpg', 'FAA2'=>'Clothes2.jpg', 'FAA3' =>'Clothes3.jpg', 'FAA4' => 'Clothes4.jpg', 'FAA5'=> 'Clothes5.jpg'),
                  'FAB' => array('FAB1' => 'Pants1.jpg', 'FAB2'=>'Pants2.jpg', 'FAB3' =>'Pants3.jpg', 'FAB4' => 'Pants4.jpg', 'FAB5'=> 'Pants5.jpg'),
                  'FAC' => array('FAC1' => 'Shoes1.jpg', 'FAC2'=>'Shoes2.jpg', 'FAC3' =>'Shoes3.jpg', 'FAC4' => 'Shoes4.jpg', 'FAC5'=> 'Shoes5.jpg')),
    'TY' => array('TYA' => array('TYA1' => 'electronic-toy1.jpg', 'TYA2'=>'electronic-toy2.jpg', 'TYA3' =>'electronic-toy3.jpg', 'TYA4' => 'electronic-toy4.jpg', 'TYA5'=> 'electronic-toy5.jpg'),
                  'TYB' => array('TYB1' => 'Lego-toy1.jpg', 'TYB2'=>'Lego-toy2.jpg', 'TYB3' =>'Lego-toy3.jpg', 'TYB4' => 'Lego-toy4.jpg', 'TYB5'=> 'Lego-toy5.jpg'),
                  'TYC' => array('TYC1' => 'Plush-toy1.jpg', 'TYC2'=>'Plush-toy2.jpg', 'TYC3' =>'Plush-toy3.jpg', 'TYC4' => 'Plush-toy4.jpg', 'TYC5'=> 'Plush-toy5.jpg')),
    'SP' => array('SPA' => array('SPA1' => 'Fitness-equipment1.jpg', 'SPA2'=>'Fitness-equipment2.jpg', 'SPA3' =>'Fitness-equipment3.jpg', 'SPA4' => 'Fitness-equipment4.jpg', 'SPA5'=> 'Fitness-equipment5.jpg'),
                  'SPB' => array('SPB1' => 'Protein-supplement1.jpg', 'SPB2'=>'Protein-supplement2.jpg', 'SPB3' =>'Protein-supplement3.jpg', 'SPB4' => 'Protein-supplement4.jpg', 'SPB5'=> 'Protein-supplement5.jpg'),
                  'SPC' => array('SPC1' => 'Sport-accessories1.jpg', 'SPC2'=>'Sport-accessories2.jpg', 'SPC3' =>'Sport-accessories3.jpg', 'SPC4' => 'Sport-accessories4.jpg', 'SPC5'=> 'Sport-accessories5.jpg')),
    'CO' => array('COA' => array('COA1' => 'Makeup-product1.jpg', 'COA2'=>'Makeup-product2.jpg', 'COA3' =>'Makeup-product3.jpg', 'COA4' => 'Makeup-product4.jpg', 'COA5'=> 'Makeup-product5.jpg'),
                  'COB' => array('COB1' => 'Perfume1.jpg', 'COB2'=>'Perfume2.jpg', 'COB3' =>'Perfume3.jpg', 'COB4' => 'Perfume4.jpg', 'COB5'=> 'Perfume5.jpg'),
                  'COC' => array('COC1' => 'Skincare-product1.jpg', 'COC2'=>'Skincare-product2.jpg', 'COC3' =>'Skincare-product3.jpg', 'COC4' => 'Skincare-product4.jpg', 'COC5'=> 'Skincare-product5.jpg')),
    'FD' => array('FDA' => array('FDA1' => 'Candies1.jpg', 'FDA2'=>'Candies2.jpg', 'FDA3' =>'Candies3.jpg', 'FDA4' => 'Candies4.jpg', 'FDA5'=> 'Candies5.jpg'),
                  'FDB' => array('FDB1' => 'Drink1.jpg', 'FDB2'=>'Drink2.jpg', 'FDB3' =>'Drink3.jpg', 'FDB4' => 'Drink4.jpg', 'FDB5'=> 'Drink5.jpg'),
                  'FDC' => array('FDC1' => 'Processed-food1.jpg', 'FDC2'=>'Processed-food2.jpg', 'FDC3' =>'Processed-food3.jpg', 'FDC4' => 'Processed-food4.jpg', 'FDC5'=> 'Processed-food5.jpg'))
 );    
 $array_pri = array(
    'FA' => array('FAA' => array('FAA1' => '9.00', 'FAA2'=> '9.00', 'FAA3' =>'9.00', 'FAA4' => '9.00', 'FAA5'=> '9.00'),
    'FAB' => array('FAB1' => '12.50', 'FAB2'=>'12.50', 'FAB3' =>'12.50', 'FAB4' => '12.50', 'FAB5'=> '12.50'),
    'FAC' => array('FAC1' => '70.00', 'FAC2'=>'50.00', 'FAC3' =>'70.00', 'FAC4' => '90.00', 'FAC5'=> '180.00')),
'TY' => array('TYA' => array('TYA1' => '70.00', 'TYA2'=>'50.00', 'TYA3' =>'70.00', 'TYA4' => '90.00', 'TYA5'=> '80.00'),
    'TYB' => array('TYB1' => '20.00', 'TYB2'=>'20.00', 'TYB3' =>'20.00', 'TYB4' => '20.00', 'TYB5'=> '20.00'),
    'TYC' => array('TYC1' => '10.00', 'TYC2'=>'10.00', 'TYC3' =>'10.00', 'TYC4' => '10.00', 'TYC5'=> '5.00')),
'SP' => array('SPA' => array('SPA1' => '200.00', 'SPA2'=>'180.00', 'SPA3' =>'300.00', 'SPA4' => '200.00', 'SPA5'=> '100.00'),
    'SPB' => array('SPB1' => '100.00', 'SPB2'=>'100.00', 'SPB3' =>'100.00', 'SPB4' => '100.00', 'SPB5'=> '100.00'),
    'SPC' => array('SPC1' => '20.00', 'SPC2'=>'30.00', 'SPC3' =>'40.00', 'SPC4' => '50.00', 'SPC5'=> '299.00')),
'CO' => array('COA' => array('COA1' => '300.00', 'COA2'=>'3300.00', 'COA3' =>'33300.00', 'COA4' => '333300.00', 'COA5'=> '999999.00'),
    'COB' => array('COB1' => '50.00', 'COB2'=>'60.00', 'COB3' =>'70.00', 'COB4' => '80.00', 'COB5'=> '100.00'),
    'COC' => array('COC1' => '55.00', 'COC2'=>'65.00', 'COC3' =>'75.00', 'COC4' => '96.00', 'COC5'=> '999.00')),
'FD' => array('FDA' => array('FDA1' => '5.99', 'FDA2'=>'7.99', 'FDA3' =>'8.99', 'FDA4' => '10.99', 'FDA5'=> '19.99'),
    'FDB' => array('FDB1' => '3.00', 'FDB2'=>'31.99', 'FDB3' =>'3.00', 'FDB4' => '3.00', 'FDB5'=> '3.00'),
    'FDC' => array('FDC1' => '2.99', 'FDC2'=>'3.99', 'FDC3' =>'4.99', 'FDC4' => '5.99', 'FDC5'=> '6.99'))
 );

 $array_description = array(
    'FA' => array('FAA' => array('FAA1' => 'Blueshirt', 'FAA2'=>'PLAY T-Shirt', 'FAA3' =>'Adidas T-Shirt', 'FAA4' => 'Black T-Shirt', 'FAA5'=> 'DEGREY T-Shirt'),
                  'FAB' => array('FAB1' => 'Cream Long Pants', 'FAB2'=>'Black Long Pants', 'FAB3' =>'Green Long Pants', 'FAB4' => 'Light Green Long Pant', 'FAB5'=> 'Long Long Pants'),
                  'FAC' => array('FAC1' => 'Vans', 'FAC2'=>'Brooks', 'FAC3' =>'Vans Slip-on', 'FAC4' => 'Nike Shoes', 'FAC5'=> 'Nike Air')),
    'TY' => array('TYA' => array('TYA1' => 'Electric Toy: Car', 'TYA2'=>'Electric Toy: Motobike', 'TYA3' =>'Electric Toy: Quad Bike', 'TYA4' => 'Electric Toy: Cream Big Car', 'TYA5'=> 'Electric Toy: Black Big Car'),
                  'TYB' => array('TYB1' => 'Lego: Toy Story 4', 'TYB2'=>'Lego: City', 'TYB3' =>'Lego: Super Pack', 'TYB4' => 'Lego: Toy Story 1', 'TYB5'=> 'Lego: Wild Car'),
                  'TYC' => array('TYC1' => 'Plush Toy: Dog', 'TYC2'=>'Plush Toy: Dog', 'TYC3' =>'Plush Toy: Bear', 'TYC4' => 'Plush Toy: Pig', 'TYC5'=> 'Plush Toy: Moster')),
    'SP' => array('SPA' => array('SPA1' => 'In House Bike ', 'SPA2'=>'Smart Wonder Cone', 'SPA3' =>'Lifting Yoke', 'SPA4' => 'Functional Frame', 'SPA5'=> 'Pull-up Bar'),
                  'SPB' => array('SPB1' => 'Protein Suppliment: WPI', 'SPB2'=>'Protein Suppliment: BodyTech', 'SPB3' =>'Protein Suppliment: NutraBio', 'SPB4' => 'Protein Suppliment: Gold Standard', 'SPB5'=> 'Protein Suppliment: LeanFit'),
                  'SPC' => array('SPC1' => 'Adidas Water Bottle', 'SPC2'=>'Table Tennis Bats', 'SPC3' =>'Knee Protectors', 'SPC4' => 'Goalkeeper Gloves', 'SPC5'=> 'Golf Club')),
    'CO' => array('COA' => array('COA1' => 'Makeup Kit', 'COA2'=>'Shape Tape', 'COA3' =>'Lipstick', 'COA4' => 'Lipstick', 'COA5'=> 'Foundation'),
                  'COB' => array('COB1' => 'Perfume: Wild Stone', 'COB2'=>'Perfume: Rose', 'COB3' =>'Perfume: Lilac', 'COB4' => 'Perfume: Skinn by Titan', 'COB5'=> 'Perfume: New Dawn'),
                  'COC' => array('COC1' => 'Skincare Hera', 'COC2'=>'Body Bath', 'COC3' =>'Ahava Body Bath', 'COC4' => 'Veil', 'COC5'=> 'Luron')),
    'FD' => array('FDA' => array('FDA1' => 'Strawberry Candies', 'FDA2'=>'Strawberry and Grapes Candies', 'FDA3' =>'Dino Jelly', 'FDA4' => 'Benny Choco', 'FDA5'=> 'Shock Candies'),
                  'FDB' => array('FDB1' => 'Sprite', 'FDB2'=>'Dalat Milk', 'FDB3' =>'Fanta', 'FDB4' => 'Sport Drink', 'FDB5'=> 'Fruit Drink'),
                  'FDC' => array('FDC1' => 'Shin Ramyun', 'FDC2'=>'Lau Thai Noddles', 'FDC3' =>'Chicken Noddles', 'FDC4' => 'Japan Noddles', 'FDC5'=> 'Nissin Noddles'))
 );    


    
*/
$array_translated = array('FA' => 'Fashion',
'TY' => 'Toy','CO' => 'Cosmestics','FD' => 'Food','SP' => 'Sport');
$array_translated_child = array('FAA' =>'Clothes',
                        'FAB' =>'Pants',
                        'FAC' =>'Shoes','TYA' =>'Electronic Toy','TYB' =>'Lego','TYC' =>'Plush Toy','FDA' =>'Candies','FDC' =>'Processed Food','FDB' =>'Drinks','SPA' =>'Fitness Equipment','SPB' =>'Protein Supplements','SPC' =>'Sport Accessories','COC' =>'Skincare Products','COA' =>'Makeup Products','COB' =>'Perfume',);



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