<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in or Register | SHOEWEAR</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}


:root {
    --primary-color: #111727;
    --secondary-color: #7f8289;
    --bg-color: #e7e8ec;
    --border-color: rgba(0,0,0,0.2);
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


body {
    height: 100vh;
    background-color: var(--bg-color);
    color: var(--primary-color);
    display: grid;
    place-items: center;
    padding: 32px;
    font-size: 12px;

}

.hero {
    width: 80%;
    height: 80%;
    max-width: 800px;
    background-color: #fff;
    display: flex;
}


.left,
.right {
    flex: 1;
    padding: 2rem;
}

.right {
    position: relative;
    display: flex;
    align-items: flex-end;
    
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    
}

.right::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
}

.right .info {
    color: #000000;
    z-index: 2;
}

.right .info p {
    margin-bottom: 1rem;
    font-size: 13px;
    line-height: 1.5;
    letter-spacing: 2px;
    margin-bottom: -20px;
}


.left {
    margin-right: 20px;
    background: #fff;
    position: relative;
    width: 100%;
    max-width: 325px;
    overflow: hidden;
}

.button-box{
    width: 220px;
    height: 35px;
    margin: auto ;
    position: relative;
    box-shadow: 0 0 20px 9px #4949481f;
}

.toggle-btn{
    padding: 10px 30px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
}

#btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 110px;
    height: 100%;
    background-color: gray;
    transition: .5s;

}


.input-group{
    top: 80px;
    position: absolute;
    width: 250px;
    transition: .5s;
}

.input-field{
    width: 100%;
    padding-bottom: 10px;
}

.input-field input{
    width: 95%;
    outline: none;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #999;

}

.input-field.success input{
    border-color: #2ecc71;
}

.input-field.error input{
    border-color: red;
}

.input-field i{
    visibility: hidden;
    position: absolute;
    /*to remove ig*/
    
}

.input-field.success i.fa-circle-check{
    color: #2ecc71;
    visibility: visible;
}

.input-field.error i.fa-circle-exclamation{
    color: red;
    visibility: visible;
}

.input-field small {
    color: red;
    visibility: hidden;
}

.input-field.error small {
    visibility: visible;
}

.google-btn{
    width: 175px;
    height: 35px;
    border: none;
    align-items: center;
    justify-content: center;
    display: flex;
    margin: auto;
    margin-top: 5px;
}

.google-btn img{
    width: 30px;
    height: 30px;
    margin-right: 10px;
}

.google-btn:hover{
    transform: scale(1.05);
}

/* To remove line in html and css*/

.line{
    margin: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.line span{
    flex: 1;
    height: 1px;
    background-color: grey;
}

/* - - - - - - - - - */

.submit-btn{
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: gray;
    border: 0;
    outline: none;
}

.check-box{
    margin: 20px 10px 15px 0;
    accent-color: grey;
}

.actions {
    margin-bottom: 25px;
}

span{
    color: #777;
    font-size: 12px;
    bottom: 68px;
    
}

#login{
    left: 50;
}

#register{
    left: 450px;
}


/*Responsive design*/
@media (max-width: 700px) {
    .right{
        display: none;
    }
    .input-group{
        max-width: 175px;
    }
}

@media (max-width: 700px) {
    .hero {
        width: 90%;
        height: 90%;
    }
}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>
    <!-- Header Header-->
    <div class=
    "logo">
        <header>
            <a href="homepage.php">
                <img src="img/logo-shoewear.png" class="logo" />
            </a>
        </header>
    </div>

    <div class="hero">
        <div class="left">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">
                    Log In
                </button>
                <button type="button" class="toggle-btn" onclick="register()">
                    Register
                </button>
            </div>
            <!-- Login Form -->
            <form action="login.php" method="post" id="login" name="loginForm" class="input-group">
                <button class="google-btn">
                    <img src="img/google.png" /> Log in with Google
                </button>
                <div class="line">
                    <span></span>
                    <small>or</small>
                    <span></span>
                </div>
                <p1>Please enter your Username.</p1>


                <div class="input-field">
                    <input type="text" placeholder="User Id" id="useridl" name="Username" />
                    <small>Error Message</small>
                </div>

                <div class="input-field">
                    <input type="password" placeholder="Enter Password" id="passwordl" name="password" />
                    <small>Error Message</small>
                </div>

                <div class="actions">
                    <div class="wrapper">
                        <input type="checkbox" class="check-box" /><span>Remember Password</span>
                    </div>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="submit-btn">Log in</button>
            </form>
            <!-- Registration Form -->
            <form action="register.php" method="post" name="registerForm" id="register" class="input-group">
                <button class="google-btn">
                    <img src="img/google.png" /> Register with Google
                </button>
                <div class="line">
                    <span></span>
                    <small>or</small>
                    <span></span>
                </div>
                <h2>Get started</h2>
                <p1>Create your account now<p1>

                        <div class="input-field">
                            <input type="text" placeholder="User Id" id="userid" name="Username" />
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <small>Error Message</small>
                        </div>

                        <div class="input-field">
                            <input type="email" placeholder="Email ID" id="email" name="email_address" />
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <small>Error Message</small>
                        </div>

                        <div class="input-field">
                            <input type="password" placeholder="Enter Password" id="password1" name="password" />
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <small>Error Message</small>
                        </div>

                        <div class="input-field">
                            <input type="password" placeholder="Confirm Password" id="password2" name="password" />
                            <i class="fa-solid fa-circle-check"></i>
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <small>Error Message</small>
                        </div>

                        <input type="checkbox" required class="check-box" /><span>I agree to the terms and conditions</span>
                        <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
        
        <div class="right" style="background-image:url('img/login-register-photo.png')">
            <!-- -->
            <div class="info">
                <p>
                    Log in and let the journey begin. Whether you're looking to shop,
                    connect, or explore ,our platform is your gateway to all the
                    possibilities.
                </p>
            </div>
        </div>
    </div>
    <script src="js/script3.js"></script>

</body>

</html>