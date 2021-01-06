<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | Single Product 2 :: w3layouts</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
              />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //Meta tag Keywords -->

        <!-- Custom-Files -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Bootstrap css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Main css -->
        <link rel="stylesheet" href="css/fontawesome-all.css">
        <!-- Font-Awesome-Icons-CSS -->
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <!-- pop-up-box -->
        <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
        <!-- menu style -->
        <!-- //Custom-Files -->

        <!-- web fonts -->
        <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
              rel="stylesheet">
        <!-- //web fonts -->

    </head>

    <body>
        <?php
        include './themepart/header.php';
        ?>
        <!-- banner-2 -->
        <div class="page-head_agile_info_w3l">

        </div>
        <!-- //banner-2 -->
        <!-- page -->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">
                <div class="container">
                    <ul class="w3_short">
                        <li>
                            <a href="index.php">Home</a>
                            <i>|</i>
                        </li>
                        <li>Single Product 2</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //page -->
        <!-- Single Page -->
        <div class="banner-bootom-w3-agileits py-5">
            <div class="container py-xl-4 py-lg-2">
                <!-- tittle heading -->
                <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                    <span>D</span>etail
                    <span>P</span>age</h3>
                <!-- //tittle heading -->
                <div class="row">
                    <div class="col-lg-5 col-md-8 single-right-left ">
                        <div class="grid images_5_of_10">
                            <div class="flexslider">
                                <?php
                                require './class/connection.php';
                                $pid = $_GET['pid'];
                                $selectq = mysqli_query($connection, "select * from tbl_product where product_id= {$pid}")or die(mysqli_error($connection));
                                $count = mysqli_num_rows($selectq);
                                if ($count < 1) {
                                    header("loaction:product.php");
                                }
                                $row = mysqli_fetch_array($selectq);
                                echo "<img style='width:150px;'  src= './admin/upload/{$row['product_image']}'>";
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                        <?php
                        require './class/connection.php';
                        $pid = $_GET['pid'];
                        $selectq = mysqli_query($connection, "select * from tbl_product where product_id= {$pid}")or die(mysqli_error($connection));
                        $count = mysqli_num_rows($selectq);
                        if ($count < 1) {
                            header("loaction:product.php");
                        }
                        $row = mysqli_fetch_array($selectq);
                        
                        echo "<h1 class='mb-3'>{$row['product_name']}</h1>";
                        echo "<div class='product-single-w3l'>";
                        
                        echo "<p class='mb-3'>";
                        $oldprice = $row['product_price'] + 1000;

                        

                        echo "<h4>$.{$row['product_price']}   <del>$.$oldprice</del></h4>";

                        echo "<label>Free delivery</label>";
                        echo "</p>";
                        echo "<div class='single-infoagile'>";
                        echo "<ul>";
                        echo "<li class='mb-3'>";
                        echo "Cash on Delivery Eligible.";
                        echo "</li>";
                        echo "<li class='mb-3'>";
                        echo "Shipping Speed to Delivery.";
                        echo "</li>";
                        echo "<li class='mb-3'>";
                        echo "EMI starts at $958.";
                        echo "</li>";
                        echo "</ul>";

                        echo "</div>";

                        
                        echo "<p class='my-3'>";
                        echo "<i class='far fa-hand-point-right mr-2'></i>";
                        echo "Free within";
                        echo "<label>48 hours</label> of delivery</p>";
                        echo "<ul>";
                        echo "<li class='mb-1'>";
                        echo "<h6>{$row['product_detail']}</h6>";
                        echo "</li>";
                        echo "</ul>";
                        echo "<p class='my-sm-4 my-3'>";
                        echo "<i class='fas fa-retweet mr-3'></i>Net banking & Credit/ Debit/ ATM card";
                        echo "</p>";
                        echo "</div>";
                        ?>
                        <div class="occasion-cart">
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form method="get" action="cart-process.php">
                                    <fieldset>
                                        <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                                        Qty<input type="number" name="qty" min="1" max="10">
                                        <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- //Single Page -->

        <!-- middle section -->
        <div class="join-w3l1 py-sm-5 py-4">
            <div class="container py-xl-4 py-lg-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="join-agile text-left p-4">
                            <div class="row">
                                <div class="col-sm-7 offer-name">
                                    <h6>Smooth, Rich & Loud Audio</h6>
                                    <h4 class="mt-2 mb-3">Branded Headphones</h4>
                                    <p>Sale up to 25% off all in store</p>
                                </div>
                                <div class="col-sm-5 offerimg-w3l">
                                    <img src="images/off1.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5">
                        <div class="join-agile text-left p-4">
                            <div class="row ">
                                <div class="col-sm-7 offer-name">
                                    <h6>A Bigger Phone</h6>
                                    <h4 class="mt-2 mb-3">Smart Phones 5</h4>
                                    <p>Free shipping order over $100</p>
                                </div>
                                <div class="col-sm-5 offerimg-w3l">
                                    <img src="images/off2.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- middle section -->
        <?php
        include './themepart/footer.php';
        ?>
        <!-- js-files -->
        <!-- jquery -->
        <script src="js/jquery-2.2.3.min.js"></script>
        <!-- //jquery -->

        <!-- nav smooth scroll -->
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>
        <!-- //nav smooth scroll -->

        <!-- popup modal (for location)-->
        <script src="js/jquery.magnific-popup.js"></script>
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

            });
        </script>
        <!-- //popup modal (for location)-->

        <!-- cart-js -->
        <script src="js/minicart.js"></script>
        <script>
            paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

            paypals.minicarts.cart.on('checkout', function (evt) {
                var items = this.items(),
                        len = items.length,
                        total = 0,
                        i;

                // Count the number of each item in the cart
                for (i = 0; i < len; i++) {
                    total += items[i].get('quantity');
                }

                if (total < 3) {
                    alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                    evt.preventDefault();
                }
            });
        </script>
        <!-- //cart-js -->

        <!-- password-script -->
        <script>
            window.onload = function () {
                document.getElementById("password1").onchange = validatePassword;
                document.getElementById("password2").onchange = validatePassword;
            }

            function validatePassword() {
                var pass2 = document.getElementById("password2").value;
                var pass1 = document.getElementById("password1").value;
                if (pass1 != pass2)
                    document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                else
                    document.getElementById("password2").setCustomValidity('');
                //empty string means no validation error
            }
        </script>
        <!-- //password-script -->

        <!-- imagezoom -->
        <script src="js/imagezoom.js"></script>
        <!-- //imagezoom -->

        <!-- flexslider -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

        <script src="js/jquery.flexslider.js"></script>
        <script>
            // Can also be used with $(document).ready()
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
        <!-- //FlexSlider-->

        <!-- smoothscroll -->
        <script src="js/SmoothScroll.min.js"></script>
        <!-- //smoothscroll -->

        <!-- start-smooth-scrolling -->
        <script src="js/move-top.js"></script>
        <script src="js/easing.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();

                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- //end-smooth-scrolling -->

        <!-- smooth-scrolling-of-move-up -->
        <script>
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <!-- //smooth-scrolling-of-move-up -->

        <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <!-- //js-files -->

    </body>

</html>