<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<!--Kelvin, Kyla-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mikaye</title>
    <script src="https://kit.fontawesome.com/46b42500a5.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
</head>

<body>
 
    <section id="header">
        <img src="./images/logo.png" class="logo" alt="" width="100px" height="30vh">

         <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">User</a>
                            <div class="dropdown-menu m-0">
                            </div>
                    </div></li>
                <li id="lg-cart  "><a href="cart.html"><span class="material-symbols-outlined">
                    shopping_cart
                    </span></a></li>
                <a href="#" id="close"><span class="material-symbols-outlined">close</span></a>
                
            </ul>
         </div>

         <div id="mobile">
            <a href="cart.html"><span class="material-symbols-outlined" style="color: black; ">
                shopping_cart
                </span></a>
                <i id="bar" class="fas fa-outdent"></i>
         </div>

         <?php
                        if(isset($_SESSION['user']))
	                    {
                            $email = $_SESSION['user'];
                            
                            ?>
                            <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $email; ?></a>
                            <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Mikaye</a>
                        </div>
                        </div>
                            <?php
	                    }
                        
                        ?>
                        
                    </div>
                    <?php
                        $count=0;
                        if(isset($_SESSION['cart']))
                        {
                            $count=count($_SESSION['cart']);
                        }
                        else
                        {
                            ?>
                            
                            <?php
            
                        }
                        
                        
                    
                    ?>
    </section>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Amazing deals</h2>
        <h1>Sales on all products</h1>
        <p><b>Save more when discount shopping with us & upto 50% </b></p>
        <a href="cart.html"><button>Shop Now</button></a>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Product</h2>
        <p>New products</p>
        <div class="product-container">
            <div class="product">
                <img src="images/shampooshop.jpg" alt="" height="50%" width="50%">
                <div class="description">
                    <span>Shampoo</span>
                    <h5>Clarifying Shampoo</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">
                            star
                            </span><span class="material-symbols-outlined">
                                star
                                </span><span class="material-symbols-outlined">
                                    star
                                    </span><span class="material-symbols-outlined">
                                        star
                                        </span><span class="material-symbols-outlined">
                                            star
                                            </span>
                    </div>
                    <h4>KES 950</h4>
                </div>
                <a href="cart.html"><span class="material-symbols-outlined cart">
                    shopping_cart
                    </span></i></a>
            </div>
            <div class="product">
                <img src="images/rosew.jpg" alt="" width="50%" height="50%">
                <div class="description">
                    <span>Rosewater</span>
                    <h5>Rosewater</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">
                            star
                            </span><span class="material-symbols-outlined">
                                star
                                </span><span class="material-symbols-outlined">
                                    star
                                    </span><span class="material-symbols-outlined">
                                        star
                                        </span><span class="material-symbols-outlined">
                                            star
                                            </span>
                    </div>
                    <h4>KES 400</h4>
                </div>
                <a href="cart.html"><span class="material-symbols-outlined cart">
                    shopping_cart
                    </span></i></a>
            </div>
            <div class="product">
                <img src="images/peppermintshop.jpg" alt="" width="50%" height="50%">
                <div class="description">
                    <span>Peppermint essential oil</span>
                    <h5>Peppermint</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">
                            star
                            </span><span class="material-symbols-outlined">
                                star
                                </span><span class="material-symbols-outlined">
                                    star
                                    </span><span class="material-symbols-outlined">
                                        star
                                        </span><span class="material-symbols-outlined">
                                            star
                                            </span>
                    </div>
                    <h4>Kes 1200</h4>
                </div>
                <a href="cart.html"><span class="material-symbols-outlined cart">
                    shopping_cart
                    </span></i></a>
            </div>
            <div class="product">
                <img src="images/vitamineshop.jpg" alt="" width="50%" height="50%">
                <div class="description">
                    <span>Vitamin E Essential oil</span>
                    <h5>Vitamin E</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">
                            star
                            </span><span class="material-symbols-outlined">
                                star
                                </span><span class="material-symbols-outlined">
                                    star
                                    </span><span class="material-symbols-outlined">
                                        star
                                        </span><span class="material-symbols-outlined">
                                            star
                                            </span>
                    </div>
                    <h4>Kes 1200</h4>
                </div>
                <a href="cart.html"><span class="material-symbols-outlined cart">
                    shopping_cart
                    </span></i></a>
            </div>
            <div class="product">
                <img src="images/argan.jpg" alt="" width="50%" height="50%">
                <div class="description">
                    <span>Argan Essential Oil</span>
                    <h5>Argan Oil</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">
                            star
                            </span><span class="material-symbols-outlined">
                                star
                                </span><span class="material-symbols-outlined">
                                    star
                                    </span><span class="material-symbols-outlined">
                                        star
                                        </span><span class="material-symbols-outlined">
                                            star
                                            </span>
                    </div>
                    <h4>Kes 600</h4>
                </div>
                <a href="cart.html"><span class="material-symbols-outlined cart">
                    shopping_cart
                    </span></i></a>
            </div>
            <div class="product">
                <img src="images/extensions.jpg" alt="" width="50%" height="50%">
                <div class="description">
                    <span>Human Hair</span>
                    <h5>Human Hair</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">
                            star
                            </span><span class="material-symbols-outlined">
                                star
                                </span><span class="material-symbols-outlined">
                                    star
                                    </span><span class="material-symbols-outlined">
                                        star
                                        </span><span class="material-symbols-outlined">
                                            star
                                            </span>
                    </div>
                    <h4>Kes 600</h4>
                </div>
                <a href="cart.html"><span class="material-symbols-outlined cart">
                    shopping_cart
                    </span></i></a>
            </div>
            <div class="product">
                <img src="images/almond.jpg" alt="" width="50%" height="50%">
                <div class="description">
                    <span>Sweet Almond Oil</span>
                    <h5>Almond oil</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">
                            star
                            </span><span class="material-symbols-outlined">
                                star
                                </span><span class="material-symbols-outlined">
                                    star
                                    </span><span class="material-symbols-outlined">
                                        star
                                        </span><span class="material-symbols-outlined">
                                            star
                                            </span>
                    </div>
                    <h4>Kes 890</h4>
                </div>
                <a href="cart.html"><span class="material-symbols-outlined cart">
                    shopping_cart
                    </span></i></a>

            </div>
            <div class="product">
                <img src="images/bonnet.jpeg" alt="" width="50%" height="50%">
                <div class="description">
                    <span>Sweet Almond Oil</span>
                    <h5>Almond oil</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">
                            star
                            </span><span class="material-symbols-outlined">
                                star
                                </span><span class="material-symbols-outlined">
                                    star
                                    </span><span class="material-symbols-outlined">
                                        star
                                        </span><span class="material-symbols-outlined">
                                            star
                                            </span>
                    </div>
                    <h4>Kes 200</h4>
                </div>
                <a href="cart.html"><span class="material-symbols-outlined cart">
                    shopping_cart
                    </span></i></a>

            </div>
           
    </section>

    <section id="banner">
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h2>Crazy Deals</h2>
            <h5>buy 1 get 1 free</h5>
            <span>The best shampoo at Mikaye</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h2>Opportunity</h2>
            <h5>buy 1 get 1 free</h5>
            <span>The best shampoo at Mikaye</span>
            <button class="white">Learn More</button>
        </div>
    </section>

    <section id="newsletter" class="section-p1">
        <div class="newstext">
            <h5>Sign up for our page</h5>
            <p> Get E-mail updates about our lates products and <span>special offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your E-mail address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="selection-p1 selection-m1">
        <div class="column">
            <img class="logo" src="./images/logo.png" alt="" width="100px" height="30vh">
            <h3>Contact</h3>
            <p><strong>Address: </strong> Mombasa Road</p>
            <p><strong>Phone: </strong> (+254) 0726151893 / (+254) 794963040</p>
            <p><strong>Hours: </strong> 09:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h3>Follow Us</h3>
                <div class="icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="column">
            <h3>About</h3>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="column">
            <h3>My Account</h3>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track MY Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col payment">
            <h3>Payment Method</h3>
            <p>Secured Payement </p>
            <img src="images/m-pesa.png" alt="" height="60px">
        </div>

        <div class="copyright">
            <svg viewBox="64 64 896 896" focusable="false" data-icon="copyright" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372zm5.6-532.7c53 0 89 33.8 93 83.4.3 4.2 3.8 7.4 8 7.4h56.7c2.6 0 4.7-2.1 4.7-4.7 0-86.7-68.4-147.4-162.7-147.4C407.4 290 344 364.2 344 486.8v52.3C344 660.8 407.4 734 517.3 734c94 0 162.7-58.8 162.7-141.4 0-2.6-2.1-4.7-4.7-4.7h-56.8c-4.2 0-7.6 3.2-8 7.3-4.2 46.1-40.1 77.8-93 77.8-65.3 0-102.1-47.9-102.1-133.6v-52.6c.1-87 37-135.5 102.2-135.5z"></path></svg>
            Mikaye @2023
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>