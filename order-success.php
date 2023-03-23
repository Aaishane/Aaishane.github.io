<?php

include "db.php";


$email = $_POST['email'];
$cartID = $_POST['cartID'];
$totalprice = $_POST['totalprice'];
$query = "INSERT INTO shoporder(email,total_price) VALUE ('$email','$totalprice') ";
$result=mysqli_query($conn,$query);


$query = "INSERT INTO order_product(orderID,ItemID,quantity,total_price) SELECT  co.orderID ,cp.productID,cp.quantity,cp.total_price FROM cart c, cart_product cp, shoporder co WHERE c.cartID = cp.cartID and c.email_address = co.email and co.email='$email'";
$result=mysqli_query($conn,$query);


$query = "DELETE FROM cart_product WHERE cartID = '$cartID' ";
$result=mysqli_query($conn,$query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Successful!</title>
</head>
<body style="background-color:#a8a4a0">
<div class="container">
<h1>Your order has been placed!</h1>
      <p>Thank you for your purchase.</p>
     
      <a href="homepage.php" class="button">Go to Home Page</a>
    </div>




</body>
</html>

<style>


body {
  font-family: Arial, sans-serif;
  background-color: ;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 40px 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  text-align: center;
}

h1 {
  font-size: 36px;
  margin-top: 0;
  margin-bottom: 20px;
}

p {
  font-size: 18px;
  margin-top: 0;
  margin-bottom: 20px;
}

strong {
  font-weight: bold;
}

.button {
  display: inline-block;
  background-color: #2f4f4f;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  font-size: 18px;
  margin-top: 20px;
}

.button:hover {
  background-color: #000;
}

@media only screen and (max-width: 600px) {
  .container {
    padding: 20px;
  }
  
  h1 {
    font-size: 24px;
  }
  
  p {
    font-size: 16px;
  }
  
  .button {
    font-size: 16px;
    padding: 8px 16px;
  }
}

</style>