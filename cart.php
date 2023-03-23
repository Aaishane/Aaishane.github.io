

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  
  <title>shoewear-cart</title>
  <link rel="stylesheet" href="styles/basic.css">
 
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="css/hpstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>


<body>
  <div id="home" class="navbar">

    <div class="logo"><a href="homepage.php"><img src="images/logo-shoewear.png" width="200px" ></a></div>
    <nav>
      <ul id="MenuItems">
        
      </ul>
    </nav>
    <a href="form.php">
    <img src="icons/user-logo.png" width="30px" height="30px">
    </a>
    
    
    </div>

<div class="small-container cart-page">

<table>
<tr>
<th>Product</th>
<th>Quantity</th>
<th>Sub Total</th>
</tr>
<?php

include "db.php";


session_start();

if (isset($_SESSION["email"]))
{
 
    $email=$_SESSION["email"];
    
    
    $query = "SELECT cartID FROM cart WHERE email_address ='$email'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $cartID = $row['cartID'];

    $query = "SELECT productID,quantity FROM cart_product WHERE cartID='$cartID' ";
    $result1 = mysqli_query($conn,$query);

$totalprice = 0;
    while ( $row1 = mysqli_fetch_array($result1)){
    
    $productID = $row1['productID'];
    $quantity = $row1['quantity'];
    $query = "SELECT product_name,price,product_image1 FROM product WHERE prod_code='$productID' ";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $productName = $row['product_name'];
    $price = $row['price'];
    $product_image = $row['product_image1'];
   $subtotal = $price * $quantity;
   $totalprice = $totalprice + $subtotal;
    echo "<tr> ";
    echo "<td>";
     echo '<div class="cart-info">' ;
        echo '<img src="'.$product_image.'" >';
        echo "<div>";
          echo '<p>' .$productName. '</p>';
          echo '<small> MUR '.$price.'.00</small>';
          echo '<br>';




          echo '<button id="'.$productID.'" class="'.$cartID.'" onclick="removeitem(this)">remove</button>';

          
        echo '</div>';
      echo '</div>';
    
    echo '</td>';
    echo '<td><input type="number" value="'.$quantity.'"></td>';
   echo '<td>MUR '.$subtotal.'.00</td>';
    
    
    echo '</tr>';
    
   }
   echo '</table>';
   echo '<div class="total-price">';
      echo '<table>';
     echo '<tr>';
     
     echo'</tr>';
     echo '<tr>'; 
       echo '<td>Total Price</td>';
       echo '<td>MUR '.$totalprice.'.00</td>';
       
     echo '</tr>';
     
   echo '</table>';
   
   echo '</div>';

  } 
  else {
      echo "0 results";
  }


?>

        <form action="order-success.php" class="form-submit" method="post">
        <input type="hidden" value=<?php echo $cartID?> name="cartID">
        <input type="hidden" value=<?php echo $email?> name="email">
        <input type="hidden" value=<?php echo $totalprice?> name="totalprice">
        <input type="submit" value="Checkout" class="checkout-btn">
        
        </form>




</div>


<!--footer-->

<footer class="footer">
    <div class="footer-container">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Company</h4>
          <ul>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Online Shop</h4>
          <ul>
           
            <li><a href="homepage.php">Home Page</a></li>
            
          </ul>
        </div>
        <div class="footer-col">
          <h4>Follow Us</h4>
          <div class="social-links">
            <a href="#"><i class="fa fa-facebook-f"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            
          </div>
        </div>
      </div>
    </div>
    <hr>
  <p class="copyright">Shoewear 2023 &#xa9; </p>
  </footer>

  <script>
function removeitem(btn){
btn.closest('tr').remove();

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        location.reload();
      }
    };
 xmlhttp.open("GET", "removeitem.php?productID="+btn.getAttribute('id')+"&cartID="+btn.getAttribute('class'), true);
    xmlhttp.send();

}
  </script>

</body>
</html>

