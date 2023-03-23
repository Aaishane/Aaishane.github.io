<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles/contactus.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style=" background-image:url(images/shoe9e.jpg)">


<!--Header: Showear logo, shoppingcart&account icon-->
<div class="header">
      <div class="left-section">
        <a href="homepage.php"><img class="shoewear-logo" src="icons/logo-shoewear2.png"></a>
        
      
      </div>
     
      <div class="right-section">
        <div class="cart-icon-container">
          <a href="cart.php">
          <img class="cart-icon" src="icons/cart-logo2.png">
          </a>
          
          <div class="tooltip">Shopping cart</div>
        </div>
        
        <div class="user-icon-container">
          <a href="form.php"><img class="user-icon" src="icons/user-logo2.png">
        </a>
          <div class="tooltip">Account</div>
        </div>
        
      </div>
    </div>


    


    <div class="contact-form">
        <h1>Contact Us</h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
           <input type="text" name="fname"   class="form-control" placeholder="Enter First Name"> <br>
           <input type="text" name="lname"  class="form-control" placeholder="Enter last Name"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
           <input type="text" name="messages"  class="form-control" placeholder="Enter Message"> <br>
          <input type="submit" class="form-control submit" value="Submit" >
          
           
       </form>
    </div>





    <footer class="footer">
    <div class="footer-container">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Company</h4>
          <ul>
            <li><a href="#">About Us</a></li>
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
            <li><a href="#featured-product">Featured products</a></li>
            <li><a href="#men-collection">Men's Collection</a></li>
            <li><a href="#women-collection">Women's Collection</a></li>
            <li><a href="#home">Home Page</a></li>
            
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






</body>
</html>