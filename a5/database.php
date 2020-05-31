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
  echo "Error creating database: " . $conn->error;
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

print_r($_GET);
echo "<br>";


$id_location = array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0];
$array_memeerise = $_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0]];

$name_value = array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][$id_location])[0];
$price_value = array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][$id_location])[1];
$description_value = array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][$id_location])[2];
$new_name = $_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][$id_location][$name_value];

$new_price =  $_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][$id_location][$price_value];
echo "<br>";

$new_ee = htmlspecialchars($new_name, ENT_QUOTES);
$new_id = htmlspecialchars($id_location, ENT_QUOTES);
echo $new_ee;

$convert_id_name= array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0];
$convert_id_price= array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0];
$convert_id_description= array_keys($_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]])[0];

$id_can_add = htmlspecialchars($convert_id_name, ENT_QUOTES);

$convert_name = $_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][$convert_id_name][$name_value];
$convert_price = $_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][$convert_id_name][$price_value];
$convert_description = $_GET[array_keys($_GET)[0]][array_keys($_GET[array_keys($_GET)[0]])[0]][$convert_id_name][$description_value];

$add_able_name = htmlspecialchars($convert_name,ENT_QUOTES);
$add_able_price = htmlspecialchars($convert_price,ENT_QUOTES);
$add_able_description = htmlspecialchars($convert_description,ENT_QUOTES);
echo $add_able_price;
echo $add_able_price;
echo $id_can_add;





$sql = "UPDATE product SET productName='Electric Toy: Car', productPrice='20.00' WHERE productID='TYA1'";




    
    /*
      
      
      
        $sql = "UPDATE product SET productDescription='$add_able_description', productName='$add_able_name', productPrice='$add_able_price' WHERE productID='$id_can_add'";
      

    

  
    


    

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
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
print_r($array_pri);


$conn->close();
?>