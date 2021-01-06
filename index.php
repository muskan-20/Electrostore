<?php
session_start();
?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
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

        <!-- banner -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item item1 active">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                                <p>Get flat
                                    <span>10%</span> Cashback</p>
                                <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
                                    <span>Big</span>
                                    Sale
                                </h3>
                                <a class="button2" href="product.html">Shop Now </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item2">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                                <p>advanced
                                    <span>Wireless</span> earbuds</p>
                                <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best
                                    <span>Headphone</span>
                                </h3>
                                <a class="button2" href="product.html">Shop Now </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item3">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                                <p>Get flat
                                    <span>10%</span> Cashback</p>
                                <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">New
                                    <span>Standard</span>
                                </h3>
                                <a class="button2" href="product.html">Shop Now </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item4">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                                <p>Get Now
                                    <span>40%</span> Discount</p>
                                <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Today
                                    <span>Discount</span>
                                </h3>
                                <a class="button2" href="product.html">Shop Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- //banner -->

        <!-- top Products -->
        <div class="ads-grid py-sm-5 py-4">
            <div class="container py-xl-4 py-lg-2">
                <!-- tittle heading -->
                <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                    <span>O</span>ur
                    <span>N</span>ew
                    <span>P</span>roducts</h3>
                <!-- //tittle heading -->
                <div class="row">
                    <!-- product left -->
                    <div class="agileinfo-ads-display col-lg-12">
                        <div class="wrapper">
                            <!-- first section -->
                            <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                                <h3 class="heading-tittle text-center font-italic">Sports</h3>
                                <div class="row">
                                    <?php
                                    require './class/connection.php';
                                    $selectq = mysqli_query($connection, "select * from tbl_product where category_id = 2")or die(mysqli_error($connection));
                                    while ($row = mysqli_fetch_array($selectq)) {
                                        ?>
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img style="height: 120px;" src="./admin/upload/<?php echo $row['product_image'] ?>" alt="">
                                                    <div class="men-cart-pro">

                                                    </div>
                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <?php echo $row['product_name'] ?>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price"><?php echo "Rs." . $row['product_price'] ?></span>
                                                        <del><?php echo $row['product_price'] + 1000 ?></del>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="pid" value="<?php echo $pid; ?>" />
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name" value="Sony 80 cm (32 inches)" />
                                                                <input type="hidden" name="amount" value="320.00" />
                                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <a href ="single.php?pid= <?php echo $row['product_id'] ?>">
                                                                    <input type="button"  value="Quick View" class="button btn" ></a>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="row">
                                    <?php
                                    require './class/connection.php';
                                    $selectq = mysqli_query($connection, "select * from tbl_product where category_id = 6")or die(mysqli_error($connection));
                                    while ($row = mysqli_fetch_array($selectq)) {
                                        ?>
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img style="height: 120px;" src="./admin/upload/<?php echo $row['product_image'] ?>" alt="">
                                                    <div class="men-cart-pro">

                                                    </div>
                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <?php echo $row['product_name'] ?>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price"><?php echo "Rs." . $row['product_price'] ?></span>
                                                        <del><?php echo $row['product_price'] + 1000 ?></del>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="pid" value="<?php echo $pid; ?>" />
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name" value="Sony 80 cm (32 inches)" />
                                                                <input type="hidden" name="amount" value="320.00" />
                                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <a href ="single.php?pid= <?php echo $row['product_id'] ?>">
                                                                    <input type="button"  value="Quick View" class="button btn" ></a>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- //first section -->
                            <!-- second section -->
                            <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                                <h3 class="heading-tittle text-center font-italic">Sports</h3>
                                <div class="row">
                                    <?php
                                    require './class/connection.php';
                                    $selectq = mysqli_query($connection, "select * from tbl_product where category_id = 6")or die(mysqli_error($connection));
                                    while ($row = mysqli_fetch_array($selectq)) {
                                        ?>
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img style="height: 120px;" src="./admin/upload/<?php echo $row['product_image'] ?>" alt="">
                                                    <div class="men-cart-pro">

                                                    </div>
                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <?php echo $row['product_name'] ?>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price"><?php echo "Rs." . $row['product_price'] ?></span>
                                                        <del><?php echo $row['product_price'] + 1000 ?></del>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="pid" value="<?php echo $pid; ?>" />
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name" value="Sony 80 cm (32 inches)" />
                                                                <input type="hidden" name="amount" value="320.00" />
                                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <a href ="single.php?pid= <?php echo $row['product_id'] ?>">
                                                                    <input type="button"  value="Quick View" class="button btn" ></a>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- //second section -->
                            <!-- third section -->

                            <!-- //third section -->
                            <!-- fourth section -->

                            <!-- //fourth section -->
                        </div>
                    </div>
                    <!-- //product left -->

                    <!-- product right -->

                </div>
            </div>
        </div>
        <!-- //top products -->

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

        <!-- footer -->
        <?php
        include './themepart/footer.php';
        ?>
        <!-- //footer -->
        <!-- copyright -->

        <!-- //copyright -->

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

        <!-- scroll seller -->
        <script src="js/scroll.js"></script>
        <!-- //scroll seller -->

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