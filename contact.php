<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product - RedStore | Ecommerce Website Design</title>

    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="stylesheet.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="Account.php">Account</a></li>
                </ul>
                </nav>
                <!-- <a href="cart.html"> <img src="images/cart.png" width="30px" height="30px" alt="icon"> </a> -->
                <img src="images/menu.png" class="menu-icon" 
                onclick="menutoggle()">
            </div>
        </div>

      <!-- Contact Page -->
     <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
            <div  class="contact-left-title">
                <h2>Contact Us</h2>
                <hr>
            </div>
            <input type="hidden" name="access_key" value="3d9f21d6-e824-4dbd-9e71-be51ef41337d">
            <input type="text" name="name" placeholder="Your Name" class="contact-input" required>
            <input type="email" name="email" placeholder="Your Email" class="contact-input" required>
            <textarea name="message" placeholder="Your Message" class="contact-input" required></textarea>
            <button type="submit">Submit <img src="images/arrow_icon.png" alt=""></button>
        </form>
        <div class="contact-right">
            <img src="images/right_img.png" alt="">
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
            <p class="copyright"></p>
        </div>
    </div>
    
    <!-- js for toggle menu -->
    <script>
        var menuitems = document.getElementById("menuitems");

        menuitems.style.maxHeight ="0px";

        function menutoggle(){
            if( menuitems.style.maxHeight =="0px")
            {
                menuitems.style.maxHeight ="200px";
            }else{
                menuitems.style.maxHeight ="0px";
                
            }
        }
    </script>

    

</body>
</html>