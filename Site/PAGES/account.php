<?php

    include "../connect.php";
    $conn = connectFunc();
    session_start();
    if(!isset($_COOKIE['Username'])) {
        header("location: login.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>DECOY - Home</title>
    <meta charset="UTF-8">
    <meta name="description" content="Personal Professional Portfolio for Matthew Winfield">
    <meta name="keywords" content="Front-End Developer, UX Design, Graphic Design, Portfolio">
    <meta name="author" content="Matthew Winfield">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../ASSETS/icons/Artboard 1.png">
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div class="site">

        <div class="page-header">
            <div class="nav-logowrap">
                <a class="logo-link" href="../index.html"><span id="logo" class="nav-logo"></span></a>
            </div>
            <div class="nav-content">
                <a href="gallery.html">GALLERY</a>
                <a href="store.html">STORE</a>
            </div>
            <div class="nav-widget">
                <div class="user-widget">
                    <a href="account.php">
                        <div class="user-wrapper">
                            <div class="user-img"></div>
                        </div>
                    </a>
                </div>


                <div class="cart-widget">
                    <a href="store/cart.html">
                        <div class="cart-wrapper">
                            <div class="cart-logo"></div>
                            <span id="cartNum">0</span>
                        </div>
                    </a>
                    <!-- <div class="dropdown-content">
                        <div id="cart" class="cart-content">

                        </div>

                        <div class="cart-summary">
                            <div class="cart-totallabel">Cart Total</div>
                            <div id="cart-total" class="cart-total"></div>
                        </div>
                        <a href="">
                            <div class="cart-footer">Hit the Checkout</div>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>


        <div class=" main-wrapper">
            <section id="landing" class="landing-sec min">
                <div class="landing-wrapper">
                    <h1 class="landing-title">account</h1>
                </div>

            </section>

            <h2 class="header">Welcome Back <?php
echo $_SESSION["Username"];
?></h2>

            <div class="account-row">
                <div class="store-item">
                    <div class="item-wrapper">
                        <div class="item-image"><img src="../ASSETS/products/illustrationcom.jpg" alt=""></div>
                        <div class="item-desc">
                            <h2 class="item-head">Illustration</h2>
                            <p class="item-text">I will create a piece of illustrative art for you.<br>Includes:</p>
                            <ul>

                                <li>Weekly Updates</li>
                                <li>High Resolution PNG,JPG or GIF</li>
                                <li>25% Discount on Printed Shirt with your design</li>
                            </ul>


                        </div>
                        <div class="item-foot">
                            <div class="item-cost">&euro;29.<span class="item-priceaffix">99</span></div>
                            <button class="item-add" onclick="storeProducts(3)">ADD</button>
                        </div>
                    </div>
                </div>
                <div class="store-item">
                    <div class="item-wrapper">
                        <div class="item-image"><img src="../ASSETS/products/3dmodelcom.png" alt=""></div>
                        <div class="item-desc">
                            <h2 class="item-head">3D Model</h2>
                            <p class="item-text">I will create a 3D model from either a reference image, from a Skype
                                meeting, or i can surprise you.<br>Includes:</p>
                            <ul>
                                <li>Weekly Updates</li>
                                <li>High Resolution Exports</li>
                                <li>Finished Rigged Character .FBX with Textures</li>
                            </ul>
                        </div>
                        <div class="item-foot">
                            <div class="item-cost">&euro;49.<span class="item-priceaffix">99</span></div>
                            <button class="item-add" onclick="storeProducts(4)">ADD</button>
                        </div>
                    </div>
                </div>

            </div>
            <form action="../PHP/logout.php" method="post">
                <input type="submit" name="Logout" value="Logout" />
            </form>
        </div>
        <section class="aboutsec" id="about">
            <div class="aboutsec-wrapper">
                <div class="aboutsec-col">
                    <div class="aboutsec-text">
                        <h2>Subscribe to <span>DECOY</span></h2>
                        <p>Why not subscribe to the Decoy newsletter to get monthly updates on everything i do, from new
                            projects to works in progress.</p>
                        <form action="../PHP/newsletter.php" method="POST">
                            <input type="email" placeholder="yourmail@mail.com">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="image-container">
                    <div class="aboutimage-background"></div>
                    <div class="aboutimage-foreground"></div>
                </div>
            </div>
        </section>

        <div class="footer">
            <div class="footer-cutout"></div>
            <div class="footer-colwrapperupper">
                <div class="footer-colside">
                    <div class="footer-subcol">
                        <div class="footer-header">PAGES</div>
                        <div class="footer-row"><a href="../index.html">&#10148; HOME</a></div>
                        <div class="footer-row"><a href="gallery.html">&#10148; GALLERY</a></div>
                        <div class="footer-row"><a href="store.html">&#10148; STORE</a></div>
                    </div>
                    <div class="footer-subcol">
                        <div class="footer-header">WORK</div>
                        <div class="footer-row"><a href="gallery.html#3d">&#10148; 3D MODEL</a></div>
                        <div class="footer-row"><a href="gallery.html#ill">&#10148; ILLUSTRATION</a></div>
                        <div class="footer-row"><a href="gallery.html#game">&#10148; GAME PROJECT</a></div>
                    </div>

                </div>
                <div class="footer-colcent">Everything
                    found
                    on
                    this
                    website, including the site itself, is of my own creation unless where otherwise
                    specified.<br>For business
                    enquiries, contact me by email: <br> matt.winfield98@gmail.com</div>
                <div class="footer-colside">
                    <div class="soc-drawer linkedin">
                        <a href="https://www.linkedin.com/in/matt-winfield-149566209/">
                            <div class="soc-logowrapper">
                                <img src="../ASSETS/icons/linkedin.svg"></img>
                            </div>
                            <div class="soc-tag">Matt Winfield</div>
                        </a>
                    </div>

                    <div class="soc-drawer instagram">
                        <a href="">
                            <div class="soc-logowrapper">
                                <img src="../ASSETS/icons/instagram.svg"></img>
                            </div>
                            <div class="soc-tag">@justadecoyportfolio</div>
                        </a>
                    </div>
                    <div class="soc-drawer fiverr">
                        <a href="">
                            <div class="soc-logowrapper">
                                <img src="../ASSETS/icons/fiverr.svg"></img>
                            </div>
                            <div class="soc-tag">@LoremIpsum</div>
                        </a>
                    </div>
                    <div class="soc-drawer twitter">
                        <a href="">
                            <div class="soc-logowrapper">
                                <img src="../ASSETS/icons/twitter.svg"></img>
                            </div>
                            <div class="soc-tag">@GMITMWinfield</div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="footer-colwrapperlower">
                <div class="container">
                    <div class="inner">&copy; COPYRIGHT 2021 Matthew Winfield │ All rights reserved</div>
                </div>
            </div>


        </div>
    </div>
    <script src="../JS/observer.js"></script>
    <script src="../JS/ux.js"></script>
    <script src="../JS/store.js"></script>

</body>

</html>