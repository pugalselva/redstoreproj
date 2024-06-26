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
        <!--------Singal Product details  -------->
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="images/exclusive.png" alt="" width="100%"  id="ProductImg">
                    
                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="images/exclusive.png" width="100%" class="Small-Img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/exclusivew-2.jpg" width="100%" class="Small-Img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/exclusivew.jpg" width="100%" class="Small-Img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/exclusive-1.jpg" width="100%" class="Small-Img">
                        </div>
                    </div>
               
               
                </div>
                <div class="col-2">
                    <p>Home / Smart Watch</p>
                    <h1>Mi Smart Watch</h1>
                    <h4>₹2999.00</h4>
                    <select>
                        <option>Select Color</option>
                        <option>Orange</option>
                        <option>white</option>
                        <option>Red</option>
                
                    </select>
                    <input type="number" value="1">
                    <a href="customer detail.php" class="btn">Buy Now</a>
                    <h3>Product Details<i class="fa fa-indent"></i></h3>
                    <br>
                    <p>The Mi Smart Brand 4 features a 39.9% larger (than Mi Bnad 3)
                    AMOLED color full-touch display width adjustable bringhtness, 
                    so everything is clear asbe.
                    </p>
                </div>
            </div>

        </div>
        <!---------title -------->
        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <p>View More</p>
            </div>
        </div>


        <!-- -------product------ -->

    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="images/exclusiveb-1.jpg" alt="">
                <h4>Smart watch 4</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$1999.00</p>
            </div>
            <div class="col-4">
                <img src="images/exclusivew-2.jpg" alt="">
                <h4>Mi Brand</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$2999.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-11.jpg" alt="">
                <h4>Block Pant</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$499.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-12.jpg" alt="">
                <h4>Blue Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$250.00</p>
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

    <!--------- product Gallery  --------->

    <script>
        var ProductImg =document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("Small-Img");
       
        SmallImg[0].onclick = function(){
            ProductImg.src = SmallImg[0].src;

        }
        SmallImg[1].onclick = function(){
            ProductImg.src = SmallImg[1].src;
            
        }
        SmallImg[2].onclick = function(){
            ProductImg.src = SmallImg[2].src;
            
        }
        SmallImg[3].onclick = function(){
            ProductImg.src = SmallImg[3].src;
        }   
        


    </script>

    

</body>
</html>