<?php

include "db.php";

session_start();


if (isset($_SESSION["email"]))
{

    
$email=$_SESSION["email"];
$quantity=$_POST["quantity"];
$id=$_POST["id"];

$query = "SELECT cartID FROM cart WHERE email_address ='$email'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        $cartID = $row['cartID'];

        $priceQuery = "SELECT * FROM product WHERE prod_code = '$id'";
        $result = mysqli_query($conn,$priceQuery);
        $row = mysqli_fetch_array($result);
        $price = $row['price'] * $quantity;
           
 
        $query = "SELECT * FROM cart_product, cart WHERE email_address = '$email' AND productID = '$id'";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) == 0){
            $query = "INSERT INTO cart_product (cartID,productID, quantity, total_Price) VALUES ('$cartID','$id', '$quantity', '$price')";
            $result = mysqli_query($conn,$query);
           
        }
        else {
            $query = "UPDATE cart_product SET quantity = quantity + '$quantity' WHERE productID = '$id' AND cartID = '$cartID'";
            $result = mysqli_query($conn,$query);
            $query = "UPDATE cart_product SET total_price = total_price + '$price' WHERE productID = '$id' AND cartID = '$cartID'";
            $result = mysqli_query($conn,$query);
            
        }

        $query = "UPDATE cart SET total_price = total_price + '$price' WHERE cartID = '$cartID'";
        $result = mysqli_query($conn,$query);
        if ($id==9){
            header("Location:http://localhost/shoewear/ztest9.php");

        }
        else{
            header("Location:http://localhost/shoewear/item.php?id=".$id);
        }
  
}

?>