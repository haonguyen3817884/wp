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


if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

/*
$sql = "INSERT INTO product VALUES
   ('FAA1', 'Blue Shirt', 'Clothes1.jpg', '9.99', 'FA', 'FAA', 'Blue Shirt for officers daily uses'),
   ('FAA2', 'PLAY T-Shirt', 'Clothes2.jpg', '9.99', 'FA', 'FAA', 'Teen shirt'),
   ('FAA3', 'Adidas T-Shirt', 'Clothes3.jpg', '9.99', 'FA', 'FAA', 'Sport shirt produced by Hao Nguyen x Adidas'),
   ('FAA4', 'Black T-Shirt', 'Clothes4.jpg', '9.99', 'FA', 'FAA', 'Normal Black T-Shirt'),
   ('FAA5', 'DEGREY T-Shirt', 'Clothes5.jpg', '9.99', 'FA', 'FAA', 'Local Brand T-shirt'),
   ('FAB1', 'Cream Long Pants', 'Pants1.jpg', '12.50', 'FA', 'FAB', 'A long Pant with Cream color'),
   ('FAB2', 'Black Long Pants', 'Pants2.jpg', '12.50', 'FA', 'FAB', 'A long Pant Black color'),
   ('FAB3', 'Green Long Pants', 'Pants3.jpg', '12.50', 'FA', 'FAB', 'A long Pant with Green color'),
   ('FAB4', 'Light Green Long Pant', 'Pants4.jpg', '12.50', 'FA', 'FAB', 'A long Pant with Light Green color'),
   ('FAB5', 'Long Long Pants', 'Pants5.jpg', '12.50', 'FA', 'FAB', 'Really LONG Pant'),
   ('FAC1', 'Vans', 'Shoes1.jpg', '70.00', 'FA', 'FAC', 'Classic Vans Shoes. Best Seller in 2099'),
   ('FAC2', 'Brooks', 'Shoes2.jpg', '50.00', 'FA', 'FAC', 'A infamous Shoes Brand product'),
   ('FAC3', 'Vans Slip-on', 'Shoes3.jpg', '80.00', 'FA', 'FAC', 'Vans Slip-on produce in China'),
   ('FAC4', 'Nike Shoes', 'Shoes4.jpg', '90.00', 'FA', 'FAC', 'Nike standard shoes'),
   ('FAC5', 'Nike Air', 'Shoes5.jpg', '180.00', 'FA', 'FAC', 'Nike Hype shoes'),
   ('TYA1', 'Electric Toy: Car', 'Electronic-toy1.jpg', '20.00', 'TY', 'TYA', 'A Green toy car produce in China'),
   ('TYA2', 'Electric Toy: Motobike', 'Electronic-toy2.jpg', '18.00', 'TY', 'TYA', 'A Red toy motobike produce in China'),
   ('TYA3', 'Electric Toy: Quad Bike', 'Electronic-toy3.jpg', '100.00', 'TY', 'TYA', 'A Red Quad Bike toy produce in China'),
   ('TYA4', 'Electric Toy: Cream Big Car', 'Electronic-toy4.jpg', '399.00', 'TY', 'TYA', 'Drivenable Electronic car for Children'),
   ('TYA5', 'Electric Toy: Black Big Car', 'Electronic-toy5.jpg', '399.00', 'TY', 'TYA', 'Drivenable Electronic car for Children'),
   ('TYB1', 'Lego: Toy Story 4', 'Lego-toy1.jpg', '30.00', 'TY', 'TYB', 'Newest Lego in 2020'),
   ('TYB2', 'Lego: City', 'Lego-toy2.jpg', '25.00', 'TY', 'TYB', 'A Lego box about City content'),
   ('TYB3', 'Lego: Super Pack', 'Lego-toy3.jpg', '30.00', 'TY', 'TYB', 'SUPERRRR Pack'),
   ('TYB4', 'Lego: Toy Story 1', 'Lego-toy4.jpg', '999.00', 'TY', 'TYB', 'Old seasion Lego'),
   ('TYB5', 'Lego: Wild Car', 'Lego-toy5.jpg', '90.00', 'TY', 'TYB', 'Wild car Lego'),
   ('TYC1', 'Plush Toy: Hug Dog', 'Plush-toy1.jpg', '9.99', 'TY', 'TYC', 'A soft and cute Dog Plush Toy'),
   ('TYC2', 'Plush Toy: Dog', 'Plush-toy2.jpg', '9.99', 'TY', 'TYC', 'A soft and cute small Dog Plush Toy'),
   ('TYC3', 'Plush Toy: Bear', 'Plush-toy3.jpg', '9.99', 'TY', 'TYC', 'A soft and cute Bear Plush Toy'),
   ('TYC4', 'Plush Toy: Pig', 'Plush-toy4.jpg', '9.99', 'TY', 'TYC', 'A soft and cute Pig Plush Toy'),
   ('TYC5', 'Plush Toy: Monster', 'Plush-toy5.jpg', '9.99', 'TY', 'TYC', 'A soft and cute small Monster Plush Toy'),
   ('SPA1', 'In House Bike', 'Fitness-equipment1.jpg', '100.00', 'SP', 'SPA', 'This is In house requirement for people want to cycling'),
   ('SPA2', 'Smart Wonder Cone', 'Fitness-equipment2.jpg', '199.00', 'SP', 'SPA', 'Newest Smart Cone'),
   ('SPA3', 'Lifting Yoke', 'Fitness-equipment3.jpg', '90.00', 'SP', 'SPA', 'Help you to lift easy'),
   ('SPA4', 'Functional Frame', 'Fitness-equipment4.jpg', '300.00', 'SP', 'SPA', 'Best build-in multi-functions Gym equipment'),
   ('SPA5', 'Pull-up Bar', 'Fitness-equipment5.jpg', '70.00', 'SP', 'SPA', 'Help you to pull up'),
   ('SPB1', 'Protein Suppliment: WPI', 'Protein-supplement1.jpg', '99.99', 'SP', 'SPB', 'Best Seller in 2020'),
   ('SPB2', 'Protein Suppliment: BodyTech', 'Protein-supplement2.jpg', '99.99', 'SP', 'SPB', 'Most protein'),
   ('SPB3', 'Protein Suppliment: NutraBio', 'Protein-supplement3.jpg', '99.99', 'SP', 'SPB', 'Bio protein'),
   ('SPB4', 'Protein Suppliment: Gold Standard', 'Protein-supplement4.jpg', '99.99', 'SP', 'SPB', 'Best quality for Gymer'),
   ('SPB5', 'Protein Suppliment: LeanFit', 'Protein-supplement5.jpg', '99.99', 'SP', 'SPB', 'Lean Fit is the best'),
   ('SPC1', 'Adidas Water Bottle', 'Sport-accessories1.jpg', '9.99', 'SP', 'SPC', 'Adidas Fake Water Bottles'),
   ('SPC2', 'Table Tennis Bats', 'Sport-accessories2.jpg', '39.99', 'SP', 'SPC', 'China-made Table Tennis Bát'),
   ('SPC3', 'Knee Protectors', 'Sport-accessories3.jpg', '9.99', 'SP', 'SPC', 'Sport Protectors for Athlets'),
   ('SPC4', 'Goalkeeper Gloves', 'Sport-accessories4.jpg', '99.99', 'SP', 'SPC', 'Best Goalkeeper Gloves in the market'),
   ('SPC5', 'Golf Club', 'Sport-accessories5.jpg', '999.99', 'SP', 'SPC', 'High price Bad quality'),
   ('COA1', 'Makeup Kit', 'Makeup-product1.jpg', '999.00', 'CO', 'COA', 'China-made makeup kit'),
   ('COA2', 'Shape Tape', 'Makeup-product2.jpg', '99.99', 'CO', 'COA', 'Best Shape tape'),
   ('COA3', 'Lipstick', 'Makeup-product3.jpg', '109.99', 'CO', 'COA', 'Lipstick'),
   ('COA4', 'Lipstick', 'Makeup-product4.jpg', '119.99', 'CO', 'COA', 'Also Lipstick'),
   ('COA5', 'Foundation', 'Makeup-product5.jpg', '129.99', 'CO', 'COA', 'Foundation for teenagers'),
   ('COB1', 'Perfume: Wild Stone', 'Perfume1.jpg', '99.99', 'CO', 'COB', 'Wild smell'),
   ('COB2', 'Perfume: Rose', 'Perfume2.jpg', '999.99', 'CO', 'COB', 'Rose 100%'),
   ('COB3', 'Perfume: Lilac', 'Perfume3.jpg', '999.99', 'CO', 'COB', 'Lilac 100%'),
   ('COB4', 'Perfume: Skinn by Titan', 'Perfume4.jpg', '9999.99', 'CO', 'COB', 'Weird smell'),
   ('COB5', 'Perfume: New Dawn', 'Perfume5.jpg', '99999.99', 'CO', 'COB', 'Highest Price but the quality is ...'),
   ('COC1', 'Skincare Hera', 'Skincare-product1.jpg', '99.99', 'CO', 'COC', 'facewash'),
   ('COC2', 'Body Bath', 'Skincare-product2.jpg', '17.99', 'CO', 'COC', 'can create lots of bubbles'),
   ('COC3', 'Ahava Body Bath', 'Skincare-product3.jpg', '79.99', 'CO', 'COC', 'pricy body bath'),
   ('COC4', 'Veil', 'Skincare-product4.jpg', '109.99', 'CO', 'COC', 'Veil product is the best'),
   ('COC5', 'Luron', 'Skincare-product5.jpg', '999.99', 'CO', 'COC', 'Luron from China'),
   ('FDA1', 'Strawberry Candies', 'Candies1.jpg', '9.99', 'FD', 'FDA', 'Candies with berry flavor'),
   ('FDA2', 'Strawberry and Grapes Candies', 'Candies2.jpg', '9.99', 'FD', 'FDA', 'Candies with berry and grape flavor'),
   ('FDA3', 'Dino Jelly', 'Candies3.jpg', '9.99', 'FD', 'FDA', 'Jelly candies'),
   ('FDA4', 'Benny Choco', 'Candies4.jpg', '9.99', 'FD', 'FDA', 'Best Choco in the world'),
   ('FDA5', 'Shock Candies', 'Candies5.jpg', '9.99', 'FD', 'FDA', 'If you eat, you will shock'),
   ('FDB1', 'Sprite', 'Drink1.jpg', '2.99', 'FD', 'FDB', 'Lemon flavor drink'),
   ('FDB2', 'Dalat Milk', 'Drink2.jpg', '6.99', 'FD', 'FDB', 'Fresh Milk from Dalat'),
   ('FDB3', 'Fanta', 'Drink3.jpg', '2.99', 'FD', 'FDB', 'Orange Flavor Drink'),
   ('FDB4', 'Sport Drink', 'Drink4.jpg', '2.99', 'FD', 'FDB', 'Drinks after working out'),
   ('FDB5', 'Fruit Drink', 'Drink5.jpg', '2.99', 'FD', 'FDB', 'Healthy drink'),
   ('FDC1', 'Shin Ramyun', 'Processed-food1.jpg', '3.99', 'FD', 'FDC', 'Cheap instant ramen'),
   ('FDC2', 'Lau Thai Noddles', 'Processed-food2.jpg', '4.99', 'FD', 'FDC', 'Good instant ramen'),
   ('FDC3', 'Chicken Noddles', 'Processed-food3.jpg', '5.99', 'FD', 'FDC', 'Chicken flavor instant ramen'),
   ('FDC4', 'Japan Noddles', 'Processed-food4.jpg', '8.99', 'FD', 'FDC', 'Japan instant ramen'),
   ('FDC5', 'Nissin Noddles', 'Processed-food5.jpg', '9.99', 'FD', 'FDC', 'Best sales in Japan instant ramen')

";

if (mysqli_query($conn, $sql)){
  echo "New record success";
}else{
  echo "Error" . $sql ."</br>" . mysqli_error($conn);
}



  
 */
    
// Create database

/*



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



$checking = $name_value; 


/*
$sql = "INSERT INTO product VALUES('FAA1', 'Blue Shirt', 'Clothes1.jpg', '9.99', 'FA', 'FAA', '')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

*/




if($checking == "delete"){
  $sql = "DELETE FROM product WHERE productID='$id_can_add'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}




}
else {
  $sql = "UPDATE product SET productDescription='$add_able_description', productName='$add_able_name', productPrice='$add_able_price' WHERE productID='$id_can_add'";
      
    

  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  
}




    
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


header('location: adminproduct.php');


$conn->close();
?>