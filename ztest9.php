<?php
include "db.php";

$query= "SELECT * FROM  product WHERE prod_code=9";
$product = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($product);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Shoewear</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="styles/Zexclusive.css">
  <link rel="stylesheet" href="styles/column.css">
  <link rel="stylesheet" href="styles/leftColumn.css">

  
  
  <link rel="stylesheet" href="styles/responsive.css">
 


  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/popup.css">   


  <link href="https://fonts.cdnfonts.com/css/woodcutter-dripping-classic-font" rel="stylesheet">

</head>
<body style="background: url(icons/batman5.jpg)">
  
   <!--Header: Showear logo, shoppingcart&account icon-->
    <div class="header">
      <div class="left-section">
        <a href="homepage.php">
        <img class="shoewear-logo" src="icons/logo-shoewear2.png">
        </a>
        
      
      </div>
     
      <div class="right-section">
        <div class="cart-icon-container">
          <a href="">
          <img class="cart-icon" src="icons/cart-logo2.png">
          <div class="tooltip">Shopping cart</div>
          </a>
         
        </div>
        
        <div class="user-icon-container">
          <a href="form.php">
          <img class="user-icon" src="icons/user-logo2.png">
          <div class="tooltip">Account</div>
          </a>
          
        </div>
        
      </div>
    </div>
    <!--Container: all product info innit-->
    <main class="container" id="blur">

    <!-- Left Column / Shoes Image -->
    <div class="left-column">
        <div class = "product-imgs">
            <div class = "img-display">
              <div class = "img-showcase">
                <img src = <?php echo $row["product_image1"] ?> alt = "shoe image">
                <img src = <?php echo $row["product_image2"] ?> alt = "shoe image">
                <img src = <?php echo $row["product_image3"] ?> alt = "shoe image">
                <img src = <?php echo $row["product_image4"] ?> alt = "shoe image">
              </div>
            </div>
            <div class = "img-select">
              <div class = "img-item">
                <a href = "#" data-id = "1">
                  <img src = <?php echo $row["product_image1"]?> alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "2">
                  <img src = <?php echo $row["product_image2"]?> alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "3">
                  <img src = <?php echo $row["product_image3"]?> alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "4">
                  <img src = <?php echo $row["product_image4"]?> alt = "shoe image">
                </a>
              </div>
            </div>
          </div>

    </div>
   
   
    <!-- Right Column -->
    <div class="right-column">
   
      <!-- Product Description -->
      <div class="product-description">
        <span><?php echo $row["product_brand"] ?></span>
        <h1><?php echo $row["product_name"] ?></h1>
        <p><?php echo $row["prod-desc"] ?></p>
      </div>
      
   
      <!-- Product Configuration -->
      <div class="product-configuration">
   
        <!-- Product review -->
        <div class="product-review">
          <span class="review-fs">Reviews</span>
            <!-- to change to review-->
            <div class = "product-rating">
                <i class = "fas fa-skull-crossbones"></i>
                <i class = "fas fa-skull-crossbones"></i>
                <i class = "fas fa-skull-crossbones"></i>
                <i class = "fas fa-skull-crossbones"></i>
                <i class="fas fa-skull-crossbones"></i>
                <span><?php echo $row["rating"] ?></span>
              </div>
   
        </div>
   
        <!-- size -->
        <div class="size">
          <span class="size-fs">Shoe Size</span>
   
          <div class="size-choose">

            <button>37</button>
            <button>38</button>
            <button>39</button>
            <button>40</button>
            <button>41</button>
            <button>42</button>
            <button>43</button>
            <button>44</button>
            <button>45</button>
            <button>46</button>
            <button>47</button>
            <button>48</button>
            <button>49</button>
            <button>50</button>
      
          </div>
          
          <!--Size guide-->
          <div class="content">
            <a href="#" onclick="toggle()">Have a look at the sizing information</a>
          </div>
          
        </div>
      </div>
   
      <!-- Product Pricing -->
      <div class="product-price">
        <span>MUR <?php echo $row["price"] ?>.00</span>
        <form action="add-to-cart.php" class="form-submit" method="post">
        <input type="hidden" value=<?php echo $row["prod_code"]?> name="id">
        <input type="hidden" value= "1"  name="quantity">
          <input type="submit" value="Add to cart" class="cart-btn">
        </form>
      </div>
    </div>

  </main>    
  <!--Container ends-->




  <!--footer-->

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

















  <!--Popup for the size info-->
  <div id="popup">
            
    <img class="shoesiz" src="icons/Shoe size.jpg">
    
    <a class="close-btn" href="#" onclick="toggle()">close</a>
</div>

<!--Javascript for the popup-->
<script type="text/javascript">
    function toggle(){
        var blur=document.getElementById('blur')
        blur.classList.toggle('active');
        var popup=document.getElementById('popup')
        popup.classList.toggle('active');
    }
</script>

<!--calling javascript for the photos-->
   <script src="js/script2.js"></script>
  
 </body>

</html>