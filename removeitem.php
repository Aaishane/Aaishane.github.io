<?php
 
 include "db.php";

 $productID = $_GET['productID'];
$cartID = $_GET['cartID'];

$query = "DELETE FROM cart_product WHERE cartID='$cartID' AND productID='$productID'";
$result=mysqli_query($conn,$query);



?>