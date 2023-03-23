<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About us</title>
    <link rel="stylesheet" href="styles/about-us.css" />
    <style>
      *{
    margin: 0;
    padding: 0;
    font-family: "Open Sans", sans-serif;
    box-sizing: border-box;
}

body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f1f1f1;
}

.about-section {
    background: url(img/picture.jpg) no-repeat left;
    background-size: 55%;
    background-color: #fdfdfd;
    overflow: hidden;
    padding: 45px 0px;
}

.container {
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 150px;
}

.container h1 {
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.text {
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

/* Header*/
.logo {
    position: fixed;
    height: auto;
    left: 25px;
    top: 25px;
    width: 150px;
}
/* Header*/


@media screen and (max-width:1200px){
    .container{
        padding: 80px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .container{
        padding: 60px;
    }
}
    </style>
  </head>
  <body>
    <!-- Header-->
    <header>
      <a href="homepage.php">
        <img src="img/logo-shoewear.png" class="logo" />
      </a>
    </header>
    <!-- Header-->

    <div class="about-section">
      <div class="container">
        <h1>About Us</h1>
        <p class="text">
          This is important to remember. Love isn't like pie. You don't need to
          divide it among all your friends and loved ones. No matter how much
          love you give, you can always give more. It doesn't run out, so don't
          try to hold back giving it as if it may one day run out. Give it
          freely and as much as you want.
        </p>
      </div>
    </div>
  </body>
</html>
