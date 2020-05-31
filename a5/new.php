
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>
</head>



<body>

<?php
include "arraya5.php";

session_start();




?>







<div class="container">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <i class="fa fa-search-plus pull-left icon"></i>
                <h2>Invoice for purchase </h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading"><h5>Billing Details</h5></div>
                        <div class="panel-body">

                        <?php
                        echo"<p>Name: ".$_SESSION['info']['custom']['name']."</p>";
                        echo "<p>Mobile: ".$_SESSION['info']['custom']['mobile']."</p>";
                        echo"<p>Email: ".$_SESSION['info']['custom']['email']."</p>";
                        
                        
                        ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading"><h5>Payment Information</h5></div>
                        <div class="panel-body">
                            <p>Card Name: Visa</p>
                            <p>Card Number: <?php echo $_SESSION['info']['custom']['card'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading"><h5>Order Preferences</h5></div>
                        <div class="panel-body">
                            <p>Gift: No</p>
                            <p>Express Delivery: Yes</p>
                            <p>Insurance: No</p>
                            <p>Coupon: No<p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3 pull-right">
                    <div class="panel panel-default height">
                        <div class="panel-heading"><h5>Shipping Address</h5></div>
                        <div class="panel-body">
                            <p><?php echo $_SESSION['info']['custom']['address'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item Name</strong></td>
                                    <td class="text-center"><strong>Item Price</strong></td>
                                    <td class="text-center"><strong>Item Quantity</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php

                            $total_price1 = 0;
                            foreach ($_SESSION as $the_final_new_key1 => $the_final_new_value1){

if($the_final_new_key1 == 'FA'||$the_final_new_key1 == 'SP'||$the_final_new_key1 == 'FD'||$the_final_new_key1 == 'CO'||$the_final_new_key1 == 'TY'){
    foreach($_SESSION[$the_final_new_key1] as $the_final_new_key2=> $the_final_new_value2){
        foreach ($_SESSION[$the_final_new_key1][$the_final_new_key2] as $the_final_new_key3 => $the_final_new_value3){
            
            echo "<tr>";
            echo "<td>".$array_name[$the_final_new_key1][$the_final_new_key2][$the_final_new_key3]."</td>";
            echo "<td class='text-center'>".$the_final_new_value3."</td>";
            echo "<td class='text-center'>".$array_pri[$the_final_new_key1][$the_final_new_key2][$the_final_new_key3]."</td>";
            echo "<td class='text-right'>".$the_final_new_value3*$array_pri[$the_final_new_key1][$the_final_new_key2][$the_final_new_key3]."</td>";

            echo "</tr>";
            $total_price1 = $the_final_new_value3*$array_pri[$the_final_new_key1][$the_final_new_key2][$the_final_new_key3] + $total_price1;

        }
    }

}
}
?>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Total</strong></td>
                                    <td class="highrow text-right"><?php echo $total_price1 ?></td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

$_SESSION = array();

?>


    
</body>
</html>


