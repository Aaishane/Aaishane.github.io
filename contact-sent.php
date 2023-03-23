<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message sent</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/contactus.css">
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

   




    <div class="container">
<h1>Contact Us</h1>
      <p>Thank you for sending a message!</p>
     
      <a href="homepage.php" class="button">Go to Home Page</a>
    </div>
   
    





    <footer class="footer">
    <div class="footer-container">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Company</h4>
          <ul>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
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
  width:50%;
  height:70vh;
  margin: 0 auto;
  padding: 40px 20px;
  background-color: transparent;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  text-align: center;
}

h1 {
  color:white;
  font-size: 36px;
  margin-top: 100px;
  margin-bottom: 20px;
}

p {
  color:white;
  font-size: 18px;
  margin-top: 0;
  margin-bottom: 20px;
}

strong {
  font-weight: bold;
}

.button {
  display: inline-block;
  background-color: red;
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