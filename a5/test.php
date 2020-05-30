

<form action="test.php" method='get'>
 <input type="text" name='card[card1][card]'>



<?php 

echo "";

?>

                </form>


<script>
var qty = Number(document.getElementById("qty").value)
    console.log(qty);
        function qtyUp(){
            var qty = Number(document.getElementById("qty").value);
            console.log(qty);
            document.getElementById('qty').value = String(qty+1);

        }
        function qtyDown(){
            var qty = Number(document.getElementById("qty").value);
            console.log(qty);
            if(qty>1){
                document.getElementById('qty').value = String(qty-1);

            }
        }
</script>
</form>