<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/hpstyle.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <script src="js/script.js" defer></script>
  <title>shoewear</title>
</head>
<body style="background:url(images/black_twill.png)">
<!--Header page that has the nav bar, photo and description-->
<div class="header">
  <div class="container">
    <div id="home" class="navbar">
      <div class="logo"><img src="images/logo-shoewear.png" width="200px" ></div>
      <nav>
        <ul id="MenuItems">
          
        <li><a href="#kid-collection">Kid</a></li>
          <li><a href="#men-collection">Men</a></li>
          <li><a href="#women-collection">Women</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="contactus.php">Contact</a></li>
          <li><a href="form.php">Account</a></li>
        </ul>
      </nav>
      <a href="cart.php">
      <img src="images/shopping-bag-1.png" width="30px" height="30px">
      </a>
      
      <img src="images/hamburger.png" class="menu-icon" onclick="menutoggle()">
      
      </div>
      <div class="row">
        <div class="col-2"><h1>Walk In The World Of Fashion</h1>
          <p>Welcome to Shoewear, your one-stop online destination for the latest and
             greatest footwear trends. We offer a wide range of shoes to fit your style
              and budget. Whether you need a pair of shoes for work or play, we have you 
            covered. Shop with us today and step out in style!</p>
            <a href="#men-collection" class="btn">Our Collections &#8594;</a>
      </div>
      <div class="col-2">
        <img src="images/home-page-image.png" >
      </div>
      </div>
      
    </div>

</div>

<!------------Feature categories--------->
<div class="body-1">
  <div class="wrapper">
    <i id="left" class="fa fa-angle-left"></i>
    <div class="carousel">
     <img src="images/category-img-1.jpg" alt="img" draggable="false">
     <img src="images/category-img-2.jpg" alt="img" draggable="false">
     <img src="images/category-img-3.jpg" alt="img" draggable="false">
     <img src="images/category-img-4.jpg" alt="img" draggable="false">
     <img src="images/category-img-5.jpg" alt="img" draggable="false">
     <img src="images/category-img-6.jpg" alt="img" draggable="false">
     <img src="images/category-img-7.jpg" alt="img" draggable="false">
     <img src="images/category-img-8.jpg" alt="img" draggable="false">
     <img src="images/category-img-9.jpg" alt="img" draggable="false">
  
    </div>
    <i id="right" class="fa fa-angle-right"></i>
  
  </div>
</div>


<!-------featured products-------->
<div class="small-container">
  <h2 id="featured-product" class="title">Featured Products</h2>
  <div class="row">

  <!--start for 1 product cart only-->
  <div class="col-4">
<div class="product-container">
<div class="card">
  <div class="shoe-fea-1">
<div class="imgbx">
<img src="images/shoe1a-removebg.png" alt="">
</div>
<div class="content-box">
  <h2>Nike Dunk Low Sneakers</h2>
  <div class="rating">
    <h3>Reviews(60) </h3>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
  </div>
  <div class="price">
    <h4>Price : 1500.00</h4>
    
  </div>
  <a href="http://localhost/shoewear/item.php?id=1">Buy Now</a>
</div>
</div>
</div>
</div>
</div>
 <!--end for 1 product cart only-->

<div class="col-4">
  <div class="product-container">
  <div class="card">
  <div class="imgbx">
  <img src="images/shoe6a-removebg-preview.png" >
  </div>
  <div class="content-box">
    <h2>Off-White Out Of Office Sneakers</h2>
    <div class="rating">
      <h3>Reviews(50) </h3>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
    </div>
    <div class="price">
      <h4>Price : 1400.00</h4>
      
    </div>
    <a href="http://localhost/shoewear/item.php?id=6">Buy Now</a>
  </div>
  </div>
  </div>
  </div>
    
</div>

<!--Men Collection-->
<h2 id="men-collection" class="title">Men's Collections</h2>
<div class="row">
  <div class="col-4">
    <div class="product-container">
    <div class="card">
    <div class="imgbx">
    <img src="images/shoe1a-removebg.png" alt="">
    </div>
    <div class="content-box">
      <h2>Nike Dunk Low Sneakers</h2>
      <div class="rating">
        <h3>Reviews(60) </h3>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <div class="price">
        <h4>Price : 1500.00</h4>
        
      </div>
      <a href="http://localhost/shoewear/item.php?id=1">Buy Now</a>
    </div>
    </div>
    </div>
    </div>


    <div class="col-4">
      <div class="product-container">
      <div class="card">
      <div class="imgbx">
      <img src="images/shoe2a-removebg-preview.png" alt="">
      </div>
      <div class="content-box">
        <h2>Nike Desert Oak Sneakers</h2>
        <div class="rating">
          <h3>Reviews(45) </h3>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <div class="price">
          <h4>Price : 1700.00</h4>
          
        </div>
        <a href="http://localhost/shoewear/item.php?id=2">Buy Now</a>
      </div>
      </div>
      </div>
      </div>

      <div class="col-4">
        <div class="product-container">
        <div class="card">
        <div class="imgbx">
        <img src="images/shoe3a__1_-removebg-preview.png" alt="">
        </div>
        <div class="content-box">
          <h2>Moma Lace-up ankle boots</h2>
          <div class="rating">
            <h3>Reviews(67) </h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <div class="price">
            <h4>Price : 2500.00</h4>
            
          </div>
          <a href="http://localhost/shoewear/item.php?id=3">Buy Now</a>
        </div>
        </div>
        </div>
        </div>

        <div class="col-4">
          <div class="product-container">
          <div class="card">
          <div class="imgbx">
          <img src="images/shoe4a-removebg-preview.png" alt="">
          </div>
          <div class="content-box">
            <h2>Maison Margiela Replica sneakers</h2>
            <div class="rating">
              <h3>Reviews(58) </h3>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <div class="price">
              <h4>Price : 1900.00</h4>
              
            </div>
            <a href="http://localhost/shoewear/item.php?id=4">Buy Now</a>
          </div>
          </div>
          </div>
          </div>
          </div>


 <!--Women collection-->
          <h2 id="women-collection" class="title">Women's Collections</h2>
<div class="row">
  <div class="col-4">
    <div class="product-container">
    <div class="card" product-container .card:after>
    <div class="imgbx">
    <img src="images/shoe5a-removebg-preview.png" alt="">
    </div>
    <div class="content-box">
      <h2>AMIRI Skel Leather Sneakers</h2>
      <div class="rating">
        <h3>Reviews(62) </h3>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </div>
      <div class="price">
        <h4>Price : 1600.00</h4>
        
      </div>
      <a href="http://localhost/shoewear/item.php?id=5">Buy Now</a>
    </div>
    </div>
    </div>
    </div>


    <div class="col-4">
      <div class="product-container">
      <div class="card">
      <div class="imgbx">
      <img src="images/shoe6a-removebg-preview.png" alt="">
      </div>
      <div class="content-box">
        <h2>Off-White Out Of Office Sneakers</h2>
        <div class="rating">
          <h3>Reviews(50) </h3>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div class="price">
          <h4>Price : 1400.00</h4>
          
        </div>
        <a href="http://localhost/shoewear/item.php?id=6">Buy Now</a>
      </div>
      </div>
      </div>
      </div>

      <div class="col-4">
        <div class="product-container">
        <div class="card">
        <div class="imgbx">
        <img src="images/shoe7a-removebg-preview.png" alt="">
        </div>
        <div class="content-box">
          <h2>Balmain B-East Chunky Sneakers</h2>
          <div class="rating">
            <h3>Reviews(82) </h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <div class="price">
            <h4>Price : 1800.00</h4>
            
          </div>
          <a href="http://localhost/shoewear/item.php?id=7">Buy Now</a>
        </div>
        </div>
        </div>
        </div>

        <div class="col-4">
          <div class="product-container">
          <div class="card">
          <div class="imgbx">
          <img src="images/shoe8a-removebg-preview.png" alt="">
          </div>
          <div class="content-box">
            <h2>R13 Leopard-Print High-top trainers</h2>
            <div class="rating">
              <h3>Reviews(50) </h3>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <div class="price">
              <h4>Price : 2000.00</h4>
              
            </div>
            <a href="http://localhost/shoewear/item.php?id=8">Buy Now</a>
          </div>
          </div>
          </div>
          </div>
          </div>

<!--Kid's Collection-->
          <h2 id="kid-collection" class="title">Kid's Collections</h2>
<div class="row">
  <div class="col-4">
    <div class="product-container">
    <div class="card" product-container .card:after>
    <div class="imgbx">
    <img src="images/shoe10a-removebg-preview.png" alt="">
    </div>
    <div class="content-box">
      <h2>MOON BOOT LOW NYLON WP 2</h2>
      <div class="rating">
        <h3>Reviews(36) </h3>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </div>
      <div class="price">
        <h4>Price : 1100.00</h4>
        
      </div>
      <a href="http://localhost/shoewear/item.php?id=10">Buy Now</a>
    </div>
    </div>
    </div>
    </div>


    <div class="col-4">
      <div class="product-container">
      <div class="card">
      <div class="imgbx">
      <img src="images/shoe11a-removebg-preview.png" alt="">
      </div>
      <div class="content-box">
        <h2>Alexander McQueen Touch-strap sneakers</h2>
        <div class="rating">
          <h3>Reviews(76) </h3>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <div class="price">
          <h4>Price : 1000.00</h4>
          
        </div>
        <a href="http://localhost/shoewear/item.php?id=11">Buy Now</a>
      </div>
      </div>
      </div>
      </div>
</div>

<!----Exclusive Item------>

<div class="exclusive-item">
  <div class="small-container-exclusive">
    <div class="row">
      <div class="col-2">
<img src="images/exclusive-item-2.png" class="exclusive-img">
      </div>

      <div class="col-2">
<p class="exclusive-title">Exclusively Available on Shoewear</p>
<h1>PUMA X BATMAN Suede Classic Trainers </h1>
<small>Gotham City, we’re coming for you. The PUMA x BATMAN collection
   captures the essence of the latest film
  , The Batman, through its moody colours, dramatic design elements,
   and graphics inspired by the Caped Crusader himself. The collection’s 
   Suede takes full inspiration from the superhero, with a mysterious palette and bats 
   appearing throughout.</small>
   <p> </p>
   <a href="ztest9.php" class="btn-2">Buy Now &#8594;</a>
      </div>
      
    </div>
  </div>
</div>
<!--website comments-->
<div class="comment">
  <div class="small-container">
    <div class="row">
      <div class="col-3">
        <i class="fa fa-quote-left"></i>
        <p>
          I recently purchased a pair of shoes from this website and 
          I couldn't be happier with my experience.
           The selection was impressive and the prices were very affordable too.
            The checkout process was a breeze 
          and my shoes arrived quickly and in perfect condition. 
          I will definitely be shopping here again! A favorite website for shoes!
        </p>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <img src="images/walter-white.png" >
        <h3>Walter White</h3>
      </div>

      <div class="col-3">
        <i class="fa fa-quote-left"></i>
        <p>
          I have been a loyal customer of this shoe website for several years now and I can honestly
           say that they never disappoint. The quality of their products is consistently
            high and their customer service is top-notch. I appreciate that
           they always have the latest styles and trends, as well as classic styles that never go out of fashion.
        </p>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <img src="images/Saul-Goodman.png" >
        <h3>Saul Goodman</h3>
      </div>

      <div class="col-3">
        <i class="fa fa-quote-left"></i>
        <p>
          I highly recommend this shoe website to anyone in the market for a 
          new pair of shoes. The website is easy to navigate and they have a wide 
          selection of shoes for all occasions. The prices are fair and the shipping is fast. Plus,
           their return policy is very customer-friendly, which gives me peace of mind when making a purchase.
        </p>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <img src="images/Gustavo-Fring.png" >
        <h3>Gustavo fring</h3>
      </div>
    </div>
  </div>
</div>

<!--Footer-->
<footer class="footer">
  <div class="container">
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
    

<!--Javascript for the hamburger-->
<script>
  var MenuItems = document.getElementById("MenuItems");

  MenuItems.style.maxHeight = "0px";

  function menutoggle(){
    if(MenuItems.style.maxHeight=="0px"){
      MenuItems.style.maxHeight = "200px";
    }
    else{
      MenuItems.style.maxHeight = "0px";
    }
  }
</script>


</body>
</html>