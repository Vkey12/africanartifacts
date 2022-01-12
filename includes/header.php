<?php
session_start();
include 'admin/connect.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>African Artifacts</title>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- push menu-->
    <div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="icon-close f-20"></i></span>
            <div class="clearfix"></div>
            <form role="search" method="get" id="searchform" class="searchform" action="/search">
                <div>
                    <label class="screen-reader-text" for="q"></label>
                    <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                    <input type="hidden" name="type" value="product">
                    <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
                </div>
            </form>
            <ul class="nav-home5 js-menubar">
                <li class="level1 active dropdown"><a href="#">Home</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="home1.html" title="">Demo 1</a></li>
                        <li class="level2"><a href="home2.html" title="">Demo 2</a></li>
                        <li class="level2"><a href="home3.html" title="">Demo 3</a></li>
                        <li class="level2"><a href="home4.html" title="">Demo 4</a></li>
                        <li class="level2"><a href="home5.html" title="">Demo 5</a></li>
                        <li class="level2"><a href="#" title="">Demo 6</a></li>
                    </ul>
                </li>
                <li class="level1 active dropdown"><a href="#">Shop</a>
                    <span class="icon-sub-menu"></span>
                    <div class="menu-level1 js-open-menu">
                        <ul class="level1">
                            <li class="level2">
                                <a href="#">Shop Layout</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="shop_full.html" title="">shop Full Width</a></li>
                                    <li class="level3"><a href="shopgrid_v1.html" title="">Shop Grid v.1</a></li>
                                    <li class="level3"><a href="shopgrid_v2.html" title="">Shop Grid v.2</a></li>
                                    <li class="level3"><a href="shoplist.html" title="">Shop List</a></li>
                                    <li class="level3"><a href="shopleft_sidebar.html" title="">Shop Left Sidebar</a></li>
                                    <li class="level3"><a href="shopright_sidebar.html" title="">Shop Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Categories</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="cat_fullwidth.html" title="">Categories Full Width</a></li>
                                    <li class="level3"><a href="cat_left_sidebar.html" title="">Categories Left Sidebar</a></li>
                                    <li class="level3"><a href="cat_right_sidebar.html" title="">Categories Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Single Product Type</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="bundle.html" title="">Bundle</a></li>
                                    <li class="level3"><a href="pin_product.html" title="">Pin Product</a></li>
                                    <li class="level3"><a href="360degree.html" title="">360 Degree</a></li>
                                    <li class="level3"><a href="feature_video.html" title="">Featued video</a></li>
                                    <li class="level3"><a href="simple.html">Simple</a></li>
                                    <li class="level3"><a href="variable.html">Variable</a></li>
                                    <li class="level3"><a href="affilate.html">External / Affiliate</a></li>
                                    <li class="level3"><a href="grouped.html">Grouped</a></li>
                                    <li class="level3"><a href="outofstock.html">Out of stock</a></li>
                                    <li class="level3"><a href="onsale.html">On sale</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Single Product Layout</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="product_extended.html" title="">Product Extended</a></li>
                                    <li class="level3"><a href="product_sidebar.html" title="">Product Left Sidebar</a></li>
                                    <li class="level3"><a href="product_right_sidebar.html" title="">Product Right Sideba</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Other Pages</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="shop_full.html" title="">Shop</a></li>
                                    <li class="level3"><a href="cart.html" title="">Cart</a></li>
                                    <li class="level3"><a href="wishlist.html" title="">My Wishlist</a></li>
                                    <li class="level3"><a href="checkout.html" title="">Checkout</a></li>
                                    <li class="level3"><a href="myaccount.html" title="">My Account</a></li>
                                    <li class="level3"><a href="track.html" title="">Track Your Order</a></li>
                                    <li class="level3"><a href="quickview.html" title="">Quick View</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="level1 active dropdown"><a href="#">Mega Menu</a></li>
                <li class="level1">
                    <a href="#">Pages</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="aboutus.html" title="About Us ">About Us </a></li>
                        <li class="level2"><a href="contactus.html" title="Contact">Contact</a></li>
                        <li class="level2"><a href="faq.html" title="FAQs">FAQs</a></li>
                        <li class="level2"><a href="404.html" title="404">404</a></li>
                        <li class="level2"><a href="commingsoon.html" title="Coming Soon">Coming Soon</a></li>
                    </ul>
                </li>
                <li class="level1">
                    <a href="#">Blog</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="blog-standar.html" title="Blog Standar">Blog Standar</a></li>
                        <li class="level2"><a href="blog_grid.html" title="Blog Gird">Blog Gird</a></li>
                        <li class="level2"><a href="blog-standar.html" title="Blog Sidebar">Blog Sidebar</a></li>
                        <li class="level2"><a href="blog-single-post.html" title="Blog Single Post">Blog Single Post</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- end push menu-->
    <div class="wrappage">
        <header id="header" class="header-v1">
            <div class="header-top-banner">
                <a href="#"><img src="img/banner-top.jpg" alt="" class="img-reponsive"></a>
            </div>
            <div class="topbar">
                <div class="container container-240">
                    <div class="row flex">
                        <div class="col-md-6 col-sm-6 col-xs-4 flex-left">
                            <div class="topbar-left">
                                <div class="element element-store hidden-xs hidden-sm">
                                   
                                    <ul class="dropdown-menu" aria-labelledby="label1">
                                        <li><a href="#">New York</a></li>
                                        <li><a href="#">California</a></li>
                                        <li><a href="#">Los Angeles</a></li>
                                    </ul>
                                </div>
                                <div class="element hidden-xs hidden-sm">
                                    <a href="#"><img src="img/icon-track.png" alt=""><span>Track Your Order</span></a>
                                </div>
                                <div class="element element-account hidden-md hidden-lg">
                                    <a href="#">My Account</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-8 flex-right">
                            <div class="topbar-right">
                                <div class="element hidden-xs hidden-sm">
                                    <a href="#">Buyer Protection </a>
                                </div>
                                <div class="element hidden-xs hidden-sm">
                                    <a href="#">Help</a>
                                </div>
                                <div class="element hidden-xs hidden-sm">
                                    <a href="#"><img src="img/icon-phone.png" alt=""><span>Save big on our app!</span></a>
                                </div>
                                <div class="element element-leaguage">
                                    <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/icon-l.png" alt="">
                                        <span>English</span>
                                        <span class="ion-ios-arrow-down f-10 e-arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="label2">
                                        <li><a href="#">EN</a></li>
                                        <li><a href="#">DE</a></li>
                                        <li><a href="#">FR</a></li>
                                    </ul>
                                </div>
                                <div class="element element-currency">
                                    <a id="label3" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                                        <span>USD</span>
                                        <span class="ion-ios-arrow-down f-10 e-arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="label3">
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">AUD</a></li>
                                        <li><a href="#">EUR</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-center">
                <div class="container container-240">
                    <div class="row flex">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 v-center header-logo">
                            <a href="#"><img src="img/logo.png" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="col-lg-7 col-md-7 v-center header-search hidden-xs hidden-sm">
                            <form method="get" class="searchform ajax-search" action="/search" role="search">
                                <input type="hidden" name="type" value="product">
                                <input type="text" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" name="q" class="form-control" placeholder="i’m shoping for...">
                                <!-- <ul class="list-product-search hidden-xs hidden-sm">
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/iphonex.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/sound.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Smartphone 6S 64GB LTE</h3>
                                        </a>
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/phone4.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/phone5.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Smartphone 6S 64GB LTE </h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/phone1.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                        </a>
                                    </li>
                                </ul> -->
                                <div class="search-panel">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href='#'>All categories <span class="fa fa-caret-down"></span></a>
                                    <ul id="category" class="dropdown-menu dropdown-category">
                                    <?php
                                $cat = mysqli_query($conn, "select * from product_category");
                                $cnt = 1;


                                while ($row = mysqli_fetch_array($cat)) {




                                ?>
                                        <li><a href="#"><?php echo $row['cat_name'];?></a></li>
                                        <?php } ?>
                                        
                                    </ul>
                                </div>
                                <span class="input-group-btn">
                                    <button class="button_search" type="button"><i class="ion-ios-search-strong"></i></button>
                                </span>
                            </form>
                            
                        </div>
                        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6 v-center header-sub">
                            <div class="right-panel">
                                <div class="header-sub-element hidden-xs hidden-sm">
                                    <div class="sub-left">
                                        <img src="img/icon-call.png" alt="">
                                    </div>
                                    <div class="sub-right">
                                        <span>Call Us Free</span>
                                        <div class="phone">(+254)7 123 456 </div>
                                    </div>
                                </div>
                                <div class="header-sub-element row">
                                    <a class="hidden-xs hidden-sm" href=""><img src="img/icon-user.png" alt=""></a>
                                    <a href="#"><img src="img/icon-heart.png" alt=""></a>
                                    <div class="cart">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="label5">
                                            <img src="img/icon-cart.png" alt="">
                                            <span class="count cart-count">0</span>
                                        </a>
                                        <!-- cart -->
                                        <div class="dropdown-menu dropdown-cart">
                                            <ul class="mini-products-list">
                                                <li class="item-cart">
                                                    <div class="product-img-wrap">
                                                        <a href="#"><img src="img/cart1.jpg" alt="" class="img-reponsive"></a>
                                                    </div>
                                                    <div class="product-details">
                                                        <div class="inner-left">
                                                            <div class="product-name"><a href="#">Harman Kardon Onyx Studio </a></div>
                                                            <div class="product-price">
                                                                $ 60.00 <span>( x2)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>
                                                </li>
                                                <li class="item-cart">
                                                    <div class="product-img-wrap">
                                                        <a href="#"><img src="img/cart1.jpg" alt="" class="img-reponsive"></a>
                                                    </div>
                                                    <div class="product-details">
                                                        <div class="inner-left">
                                                            <div class="product-name"><a href="#">Harman Kardon Onyx Studio </a></div>
                                                            <div class="product-price">
                                                                $ 60.00 <span>( x2)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>
                                                </li>
                                            </ul>
                                            <div class="bottom-cart">
                                                <div class="cart-price">
                                                    <span>Subtotal</span>
                                                    <span class="price-total">$ 120.00</span>
                                                </div>
                                                <div class="button-cart">
                                                    <a href="#" class="cart-btn btn-viewcart">View Cart</a>
                                                    <a href="#" class="cart-btn e-checkout btn-gradient">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- x cart x -->
                                    </div>
                                    <a href="#" class="hidden-md hidden-lg icon-pushmenu js-push-menu">
                                        <i class="fa fa-bars f-15"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom hidden-xs hidden-sm">
                <div class="container container-240">
                    <div class="row flex lr2">
                        <div class="col-lg-3 widget-verticalmenu">
                            <div class="navbar-vertical">
                                <button class="navbar-toggles"><span>All Departments</span></button>
                            </div>
                            <div class="vertical-wrapper">
                                <ul class="vertical-group">
                                    <li class="vertical-item level1 mega-parent"><a href="#">New Arrivals</a></li>
                                    <li class="vertical-item level1 mega-parent"><a href="#">Top 100 Best Seller <span class="h-ribbon e-red mg-l10">Hot</span></a></li>
                                    <?php
                                $cat = mysqli_query($conn, "select * from product_category");
                                


                                while ($row = mysqli_fetch_array($cat)) {




                                ?>
                                    <li class="vertical-item level1 vertical-drop"><a href="#"><?php echo $row['cat_name'];?></a>
                                        <div class="menu-level-1 dropdown-menu vertical-menu v2 homebg pd2 style1">
                                            <ul class="level1">
                                            <?php
                                            $subcat = mysqli_query($conn, "select * from sub_cat where subcatid = '".$row['cat_id']."'");
                                            while ($row1 = mysqli_fetch_array($subcat)) {
                                                
                                                ?>
                                                <li class="level2 col-md-4">
                                                    <a href="#"><?php echo $row1['sub_cat_name'];?></a>
                                                    <ul class="menu-level-2">
                                                        <?php 
                                                            $products = mysqli_query($conn, "select * from products where subcatname = '".$row1['subcatid']."'");
                                                            while ($row2 = mysqli_fetch_array($products)) {
                                                                ?>
                                                        

                                                        <li class="level3"><a href="#" title=""><?php echo $row2['pname'];?></a></li>
                                                        <?php } ?>
                                                        
                                                    </ul>
                                                </li>
                                                <?php } ?>
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    <?php } ?>
                                  
                                    <li class="vertical-item level1 vertical-drop mega-parent"><a href="#">All categlories</a>
                                        <div class="menu-level-1 dropdown-menu vertical-menu v2 pd">
                                            <div class="row">
                                            <?php
                                $cat = mysqli_query($conn, "select * from product_category");
                                


                                while ($row = mysqli_fetch_array($cat)) {




                                ?>
                                                <div class="col-md-4 text-center cate-item">
                                                    <a href="#"><img src="img/megamenu/cate1.jpg" alt="" class="img-reponsive"></a>
                                                    <h3><a href="#"><?php echo $row['cat_name'];?></a></h3>
                                                </div>
                                                <?php } ?>
                                               
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 widget-left">
                            <div class="flex lr">
                                <nav class="main-menu">
                                    <div class="collapse navbar-collapse" id="myNavbar">
                                        <ul class="nav navbar-nav">
                                            <li class="level1"><a href="#"><img src="img/icon-diamond.png" alt="">Flash Deals</a></li>
                                            <li class="level1"><a href="#">Tech Discovery<span class="h-ribbon h-pos e-skyblue">New</span></a></li>
                                            <li class="level1"><a href="#">Trending Styles</a></li>
                                            <li class="level1"><a href="#">Gift Cards <span class="h-ribbon h-pos e-green">sale</span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <div class="header-bottom-right hidden-xs hidden-sm">
                                    <img src="img/icon-ship.png" alt="" class="img-reponsive">
                                    <span>Free Shipping on Orders $100</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->