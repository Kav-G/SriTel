<?php include('registration.php') ?>
<html>
<head>
    <title>Login and Registration</title>
    <link rel="stylesheet" href="../../CSS/Style.css">

</head>
<body>
    <div class="title">SRI-TEL</div>    
    <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Login</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <form action="login.php" method="POST" id="login" class="input-group">
                    <?php include('errors.php') ?>
                    <input type="text" class="input-field" placeholder="Username" required name="username">
                    <input type="password" class="input-field" placeholder="Password" required name="password_1">
                    <input type="checkbox" class="check-box"><span></span>
                    <button type="submit" class="submit-btn" name="login_user">Log In</button>
                </form>
                
                <form action="registration.php" method="POST" id="register" class="input-group">
                    <input type="text" class="input-field" placeholder="Broadband Username" required name="username">
                    <input type="email" class="input-field" placeholder="Email Address" required name="email">
                    <input type="number" id="contact" class="input-field" placeholder="Telephone number" required name="number">
                    <input type="password" class="input-field" placeholder="Create a Password" required name="password_1">
                    <input type="password" class="input-field" placeholder="Confirm the Password" required name="password_2">
                    <input type="checkbox" class="check-box" required><span>I agree to the terms and conditions</span>
                    <button type="submit" class="submit-btn" name="reg_btn" id="reg_btn">Register</button>
                </form>
                <div class="social-icons">
                    <img src="../../Images/fb.png">
                    <img src="../../Images/tw.png">
                    <img src="../../Images/ig.png">
                </div>
            </div>
            
        </div>
        <script src="../../JS/login_valid.js"></script>
     <script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }

    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
    }
     
         
     </script>
    
</body>
</html>