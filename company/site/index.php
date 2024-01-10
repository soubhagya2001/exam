<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri RK Traders</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="rk.png" type="image/x-icon">
</head>
<body>
<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="rk.png" width="40px" alt="">
                <!-- <img src="rk2.png" width="40px" alt=""> -->
                <img src="rk3.png" width="40px" alt="">
            </div>
    
            <nav>
                <ul id="MenuItems">
                    <li><a href="">Home</a></li>
                    <li><a href="">Products</a></li>

                    <li><a href="
                        
                        <?php
                           
                            // echo $_SESSION['username'];
                            session_start();
                            // echo $_SESSION['type'];
                            
                            // $type = $_SESSION['type'];

                            if($_SESSION['details'] == 'admin'){
                                // echo "./adminDetails.php";
                                echo "http://localhost/php_codes/company/adminDetails.php";
                            }else if($_SESSION['details'] == 'client'){
                                echo "http://localhost/php_codes/company/clientDetails.php";
                            }
                        ?>
                        
                        "><?php echo $_SESSION['details']; ?></a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="http://localhost/php_codes/company/logOut.php">LogOut</a></li>
                </ul>
            </nav>
            <img src="cart.png" width="30px" height="30px" alt="">
            <img src="menu.png" class="menu-icon"  onclick="menutoggle()" alt="">
        </div>
    
        <div class="row">
            <div class="col-2">
                <h1>Sri RK Traders<br></h1>
                <p>Backbone of farmer<br>
                     A one stop solution for all your agriculture & farming needs </p>
                <a href="" class="btn">Explore Now &#8594;</a>
            </div> 
    
            <div class="col-2">
                    <img src="plant.png" alt="">
            </div>
        </div>
    </div>
</div>



<!-- -------------------featured Categories------------------------ -->

<div class="categories">
    <div class="small-container">
        <h2 class="title">Category</h2>
        <div class="row">
            <div class="col-3">
                <img src="category/category1.jpg" alt="">
            </div>
            <div class="col-3">
                <img src="category/category4.jpeg" alt="">
            </div>
            <div class="col-3">
                <img src="category/category5.jfif" alt="">
            </div>
        </div>
    </div>
</div>



    <!-- -------------------featured Products------------------------ -->
    <div class="small-container">
        <h2 class="title">Syngenta Seeds</h2>
        <div class="row">
            <div class="col-4">
                <img src="seed/syngenta/seed1.jpg" alt="">
                <h4>Tomato Hybrid Saaho (To-3251)</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>

            <div class="col-4">
                <img src="seed/syngenta/seed2.jpg" alt="">
                <h4>Cauliflower CFL-1522</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>

            <div class="col-4">
                <img src="seed/syngenta/seed3.jpg" alt="">
                <h4>Hot Papper Agnirekha</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>

            <div class="col-4">
                <img src="seed/syngenta/seed5.png" alt="">
                <h4>Radish Ivory white</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>  
        </div>

        <h2 class="title">Nuheems Seeds</h2>
        <div class="row">
            <div class="col-4">
                <img src="seed/nuhems/seed1.jpeg" alt="">
                <h4>Madhuraja F1 Hybrid</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>

            <div class="col-4">
                <img src="seed/nuhems/seed7.jfif" alt="">
                <h4>Aroosa F1 Hybrid</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>

            <div class="col-4">
                <img src="seed/nuhems/seed16.jpg" alt="">
                <h4>Chilli US 917</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>

            <div class="col-4">
                <img src="seed/nuhems/seed5.jpg" alt="">
                <h4>Arya F1 Hybrid</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>  
        </div>


    </div>


    
    <!-- --------------------footer----------------- -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>

                <div class="footer-col-2">
                    <img src="images/logo-white.png" alt="">
                    <p>Our Purpose Is To Sustainably Make The Farming And 
                        Gardening More Easy And Valuable.</p>
                </div>

                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>

                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>

            <hr>

            <p class="Copyright">Copyright 2023 - Soubhagya Prusty</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>