<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product - RedStore | Ecommerce Website Design</title>

    <!-- stylesheet -->

    <link rel="stylesheet" href="style.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- boostrap cdn -->
  
    <!-- icon cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"> <img src="images/logo.png" alt="" width="125px"> </a>
            </div>
            <nav>
            <ul id="menuitems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="Account.php">Account</a></li>
                </ul>
            </nav>
            <!-- <a href="cart.html"> <img src="images/cart.png" width="30px" height="30px" alt="icon"> </a> -->
            <img src="images/menu.png" class="menu-icon" 
            onclick="menutoggle()">
        </div>
    </div>

    <!-- --------Account-Page------- -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" alt="Kick The Ball" width="100%">
                </div>
                <!-- 469 -->
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="reg()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <form id="loginForm">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password" id="pass">
                            <!-- <input type="checkbox" onclick="display()" class="check"> -->
                            <input type="button" name="" class="btn" value="login" onclick="validate()" />
                            <a href=""> Forgot Password</a>
                        </form>



                        <form id="RegForm" method="post">
                            <input type="text" placeholder="Username" >
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Register</button>
                           



                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Dowload Our App</h3>
                    <p>Dowload App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png" alt="white">
                    <p>Our Purpose Is to sustainably Make the Pleasure and
                        Benefite of Sports Accessinble to the Many.
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy </li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us </h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Telegrom </li>
                        <li>Utube </li>


                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright © 2024. RedStore</p>
        </div>
    </div>

    <!-- js for toggle menu -->
    <script>
        var menuitems = document.getElementById("menuitems");

        menuitems.style.maxHeight = "0px";

        function menutoggle() {
            if (menuitems.style.maxHeight == "0px") {
                menuitems.style.maxHeight = "200px";
            } else {
                menuitems.style.maxHeight = "0px";

            }
        }
    </script>


    <!-- ----------js toggle form ---------  -->

    <script>
        var loginForm = document.getElementById("loginForm");
        var RegForm = document.getElementById("RegForm");

        var Indicator = document.getElementById("Indicator");

        function reg() {
            RegForm.style.transform = "translateX(0px)";
            loginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";

        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            loginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";

        }


    </script>


    <!-- form validation -->
    <script>
        // function display() {
        //     var x = document.getElementById("pass");
        //     if (x.type === "password") {
        //         x.type = "text";
        //     }
        //     else {
        //         x.type = "password";
        //     }
        // }

        function validate() {
            var password = document.getElementById('pass');
            //var length=document.getElementById("length");
            if (password.value.length >= 8) {
                window.location.href = "index.php";
                // window.location.replace = "index.php";
                return false;
            }
            else {
                alert("login failed");
            }
        }
    </script>



</body>

</html>