<?php

include "../connect.php";
$conn = connectFunc();




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
                    <h1 class="landing-title">log in</h1>
                </div>

            </section>


            <div class="form-container">
                <div class="form-col">
                    <form action="../PHP/login.php" method="post">
                        <h2>Log-In</h2>
                        <p>
                            <label for="Username">Username:</label>
                            <input type="text" name="Username" id="Username" placeholder="JohnSmith" required>
                        </p>
                        <p>
                            <label for="Password">Password:</label>
                            <input type="password" name="Password" id="Password" required>
                        </p>

                        <input type="submit" value="Login" name="login">
                    </form>
                </div>


                <div class="form-col">
                    <form action="../PHP/signup.php" method="post">
                        <h2>Register</h2>
                        <p>
                            <label for="Username">Username:</label>
                            <input type="text" name="Username" id="Username" placeholder="JohnSmith" required>
                        </p>
                        <p>
                            <label for="Email">Email:</label>
                            <input type="email" name="Email" id="Email" required>
                        </p>
                        <p>
                            <label for="Password">Password:</label>
                            <input type="password" name="Password" id="Password" required>
                        </p>
                        <p>
                            <label for="RepPassword">Repeat Password:</label>
                            <input type="password" name="RepPassword" id="RepPassword" required>
                        </p>
                        <p>
                            <label for="FullName">Full Name:</label>
                            <input type="text" name="FullName" id="FullName" required>
                        </p>
                        <p>
                            <label for="sizes">Size:</label>
                            <select id="sizes" name="sizes">
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </p>
                        <p>
                            <label for="StrAddress">Street Address:</label>
                            <input type="text" name="StrAddress" id="StrAddress" required>
                        </p>
                        <p>
                            <label for="City">Town/City:</label>
                            <input type="text" name="City" id="City" required>
                        </p>
                        <p>
                            <label for="Country">Country:</label>
                            <input type="text" name="Country" id="Country" required>
                        </p>
                        <p>
                            <label for="PostCode">Post Code:</label>
                            <input type="text" name="PostCode" id="PostCode" required>
                        </p>

                        <input type="submit" value="Register">
                    </form>
                </div>

            </div>




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