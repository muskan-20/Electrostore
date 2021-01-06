<!-- top-header -->
<div class="agile-main-top">
    <div class="container-fluid">
        <div class="row main-top-w3l py-2">
            <div class="col-lg-4 header-most-top">
                <p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
                    <i class="fas fa-shopping-cart ml-1"></i>
                </p>
            </div>
            <div class="col-lg-8 header-right mt-lg-0 mt-2">
                <!-- header lists -->
                <ul>
                    <li class="text-center border-right text-white">
                        <a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
                            <i class="fas fa-map-marker mr-2"></i>Select Location</a>
                    </li>
                    <li class="text-center border-right text-white">
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                            <i class="fas fa-truck mr-2"></i>Track Order</a>
                    </li>
                    <li class="text-center border-right text-white">
                        <i class="fas fa-phone mr-2"></i> 001 234 5678
                    </li>
                    <?php
                    if (!isset($_SESSION['userid'])) {
                        echo '<li class="text-center border-right text-white">';
                        echo'<a href="login.php" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Log In </a>';
                        echo '</li>';
                        echo '<li class="text-center text-white">';
                        echo '<a href="register.php"  class="text-white"><i class="fas fa-sign-out-alt mr-2"></i>Register </a>';

                        echo'</li>';
                    }
                    else  {
                       echo '<li class="text-center border-right text-white">';
                        echo'<a href="logout.php" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Log out </a>';
                        echo '</li>';
                        echo '<li class="text-center border-right text-white">';
                        echo "welcome".$_SESSION['username'];
								;
                        echo '</li>';
                        

                    }
                    
                    ?>


                </ul>
                <!-- //header lists -->
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal(select-location) -->
<div id="small-dialog1" class="mfp-hide">
    <div class="select-city">
        <h3>
            <i class="fas fa-map-marker"></i> Please Select Your Location</h3>
        <select class="list_of_cities">
            <optgroup label="Popular Cities">
                <option selected style="display:none;color:#eee;">Select City</option>
                <option>Birmingham</option>
                <option>Anchorage</option>
                <option>Phoenix</option>

            </optgroup>

        </select>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //shop locator (popup) -->

<!-- modals -->
<!-- log in -->

<!-- register -->

<!-- //modal -->
<!-- //top-header -->

<!-- header-bottom-->
<div class="header-bot">
    <div class="container">
        <div class="row header-bot_inner_wthreeinfo_header_mid">
            <!-- logo -->
            <div class="col-md-3 logo_agile">
                <h1 class="text-center">
                    <a href="#" class="font-weight-bold font-italic">
                        <img src="images/logo2.png" alt=" " class="img-fluid">Electro Store
                    </a>
                </h1>
            </div>
            <!-- //logo -->
            <!-- header-bot -->
            <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                <div class="row">
                    <!-- search -->
                    <div class="col-10 agileits_search">
                        <form class="form-inline" action="#" method="post">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
                            <button class="btn my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    <!-- //search -->
                    <!-- cart details -->
                    <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                        <div class="wthreecartaits wthreecartaits2 cart cart box_1">

                            <form class="last" action="viewcart.php">

                                <button class="btn w3view-cart" value="">
                                    <i class="fas fa-cart-arrow-down"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- //cart details -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop locator (popup) -->
<!-- //header-bottom -->