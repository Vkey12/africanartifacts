<?php require 'includes/header-two.php'; ?>
<!-- /header -->
<!--content-->
<?php
if (isset($_GET['product'])) {
    $prodetails = $conn->query("select * from products where id=" . $_GET['product'] . "")->fetch_assoc();
?>
    <div class="container container-240">
        <div class="single-product-detail product-bundle product-aff">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"> <?php
                                    $category = mysqli_query($conn, "SELECT * FROM product_category WHERE cat_id = '" . $prodetails['catnameid'] . "'");
                                    $cat = mysqli_fetch_assoc($category);
                                    echo $cat['cat_name'];
                                    ?></li>
                <li class="active"><?php echo $prodetails['pname']; ?> </li>
            </ul>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">

                    <div class="flex product-img-slide">


                        <div class="product-images">
                            <div class="main-img js-product-slider">
                                <a href="#" class="hover-images effect"><img src="admin/<?php echo $prodetails['pimg']; ?>" alt="photo" class="img-reponsive"></a>
                                <a href="#" class="hover-images effect"><img src="img/single/sony2.jpg" alt="photo" class="img-reponsive"></a>
                                <a href="#" class="hover-images effect"><img src="img/single/sony3.jpg" alt="photo" class="img-reponsive"></a>
                                <a href="#" class="hover-images effect"><img src="img/single/sony4.jpg" alt="photo" class="img-reponsive"></a>
                                <a href="#" class="hover-images effect"><img src="img/single/sony4.jpg" alt="photo" class="img-reponsive"></a>
                                <a href="#" class="hover-images effect"><img src="img/single/sony4.jpg" alt="photo" class="img-reponsive"></a>
                            </div>
                        </div>
                        <div class="multiple-img-list-ver2 js-click-product">
                            <div class="product-col">
                                <div class="img active">
                                    <img src="admin/<?php echo $prodetails['pimg']; ?>" alt="photo" class="img-reponsive">
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="img">
                                    <img src="img/single/sony2.jpg" alt="images" class="img-responsive">
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="img">
                                    <img src="img/single/sony3.jpg" alt="images" class="img-responsive">
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="img">
                                    <img src="img/single/sony4.jpg" alt="images" class="img-responsive">
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="img">
                                    <img src="img/single/sony4.jpg" alt="images" class="img-responsive">
                                </div>
                            </div>
                            <div class="product-col">
                                <div class="img">
                                    <img src="img/single/sony4.jpg" alt="images" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="single-flex">
                        <div class="single-product-info product-info product-grid-v2 s-50">
                            <p class="product-cate"><?php
                                                    $category = mysqli_query($conn, "SELECT * FROM product_category WHERE cat_id = '" . $prodetails['catnameid'] . "'");
                                                    $cat = mysqli_fetch_assoc($category);
                                                    echo $cat['cat_name'];
                                                    ?></p>
                            <!-- <div class="product-rating">
                                    <span class="star star-5"></span>
                                    <span class="star star-4"></span>
                                    <span class="star star-3"></span>
                                    <span class="star star-2"></span>
                                    <span class="star star-1"></span>
                                    <div class="number-rating">( 896 reviews )</div>
                                </div> -->
                            <h3 class="product-title"><a href="#"><?php echo $prodetails['pname']; ?> </a></h3>
                            <div class="product-price">
                                <span>Kshs <?php echo $prodetails['pprice'];?></span>
                            </div>
                            <div class="availability">
                                <p class="product-inventory"> <label>Availability : </label><span> In stock</span></p>
                            </div>
                            <!-- <div class="product-brand">
                                    <p>Brand :</p>
                                    <img src="img/single/sony_brand.png" alt="">
                                </div> -->
                            <div class="product-sku">
                                <label>SKU :</label><span> 8900105789430</span>
                            </div>
                            <div class="short-desc">
                                <p class="product-desc"><?php echo $prodetails['pdesc']; ?></p>
                                <!-- <ul class="desc-list">
                                       <li>Connects directly to Bluetooth</li> 
                                       <li>Battery Indicator light</li> 
                                       <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                       <li>Computers running Windows</li> 
                                    </ul> -->
                            </div>


                            <div class="single-product-button-group">
                                <div class="e-btn cart-qtt btn-gradient">
                                    <div class="e-quantity">
                                        <input type="number" step="1" min="1" max="999" name="quantity" value="1" title="Qty" class="qty input-text js-number" size="4">
                                        <div class="tc pa">
                                            <a class="js-plus quantity-right-plus"><i class="fa fa-caret-up"></i></a>
                                            <a class="js-minus quantity-left-minus"><i class="fa fa-caret-down"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn-add-cart">Add to cart <span class="icon-bg icon-cart v2"></span></a>
                                </div>
                                <a href="#" class="e-btn btn-icon">
                                    <span class="icon-bg icon-wishlist"></span>
                                </a>
                                <a href="#" class="e-btn btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>

                            <!-- <div class="product-tags">
                                    <label>Tags :</label>
                                    <a href="#">Fast,</a>
                                    <a href="#">Gaming,</a>
                                    <a href="#">Strong</a>
                                </div> -->
                        </div>
                        <div class="single-product-feature s-50 hidden-xs hidden-sm">
                            <div class="bd-7">
                                <div class="single-feature-box">
                                    <div class="single-feature-img">
                                        <img src="img/feature/credit-card2.png" alt="">
                                    </div>
                                    <div class="single-feature-info">
                                        <h3>Safe Payment</h3>
                                        <p>Pay with the world’s most payment methods.</p>
                                    </div>
                                </div>

                                <div class="single-feature-box">
                                    <div class="single-feature-img">
                                        <img src="img/feature/safety2.png" alt="">
                                    </div>
                                    <div class="single-feature-info">
                                        <h3>Confidence</h3>
                                        <p>Protection covers your purchase</p>
                                    </div>
                                </div>

                                <div class="single-feature-box">
                                    <div class="single-feature-img">
                                        <img src="img/feature/truck2.png" alt="">
                                    </div>
                                    <div class="single-feature-info">
                                        <h3>Worldwide Delivery</h3>
                                        <p>Ship to over 200 countries & regions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="hot-line e-gradient">
                                <p>Hotline</p>
                                <div class="flex align-center tele">
                                    <img src="img/feature/hotline.png" alt="">
                                    <div class="phone-number">
                                        <p>(+123) 456 789 </p>
                                        <p>(+123) 666 888</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="bestseller">
            <div class="ecome-heading style5v3 spc5v3">
                <h1>Related products</h1>
                <a href="#" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>
            </div>
            <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate">
            <?php 
                        $products = mysqli_query($conn, "SELECT * FROM products");
                        while($row = mysqli_fetch_array($products)){
                        ?>
                <div class="product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="product_extended.php?product=<?php echo $row['id'];?>"><img src="admin/<?php echo $row['pimg'];?>" alt="" class="img-reponsive"></a>
                                            <div class="ribbon-price red"><span>- 30% </span></div>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group">
                                            </div>
                                            <div class="element-list element-list-left">
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <p class="product-cate">
                                                <?php 
                                                $category = mysqli_query($conn, "SELECT * FROM product_category WHERE cat_id = '".$row['catnameid']."'");
                                                $cat = mysqli_fetch_assoc($category);
                                                echo $cat['cat_name'];
                                                ?>
                                                </p>
                                                <h3 class="product-title"><a href="product_extended.php?product=<?php echo $row['id'];?>"><?php echo $row['pname'];?></a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>Kshs <?php echo $row['pprice'];?></span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php } ?>
              
            </div>
        </div>
        <div class="e-qa">
            <div class="cmt-title v2 text-center abs">
                <h1 class="oval-bd btn-gradient">Customer questions & answers</h1>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>Does the sonos one pair up with a sonos play1 as a stereo pair ?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>As long as the players are grouped in a configuration to your liking, you can ask Alexa on the Sonos One or on an echo device to start music and playback will begin across the Sonos grouping. </p>
                        </div>
                    </div>

                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>It uses a dictionary of over 200 Latin words ?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>Latin words, combined with a handful of model sentence structures,to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humou</p>
                        </div>
                    </div>

                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>Does the sonos one pair up with a sonos play1 as a stereo pair ?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>As long as the players are grouped in a configuration to your liking, you can ask Alexa on the Sonos One or on an echo device to start music and playback will begin across the Sonos grouping. </p>
                        </div>
                    </div>

                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>It uses a dictionary of over 200 Latin words ?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>Is the quality of the "sonos one" sound the same as ?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                        </div>
                    </div>

                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        </div>
                    </div>

                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>Is the quality of the "sonos one" sound the same as ?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                        </div>
                    </div>

                    <div class="qa-element">
                        <div class="qa-quest">
                            <span class="qa-icon">Q</span>
                            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting?</h3>
                        </div>
                        <div class="qa-answer">
                            <span class="qa-icon">A</span>
                            <p>Search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn-qa">See more answered questions<i class="ion-ios-arrow-down"></i></a>
            <form class="form_newsletter" action="#" method="post">
                <input type="text" value="" placeholder="Have a question about product ? " class="newsletter-input form-control">
                <button id="subscribe2" class="button_mini btn btn-gradient" type="submit">
                    Submit<i class="ion-ios-arrow-forward"></i>
                </button>
            </form>
        </div>
        <div class="bestseller single-space">
            <div class="ecome-heading style5v3 spc5v3">
                <h1>Similar Brand</h1>
                <a href="#" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>
            </div>
            <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate">
            <?php 
                        $products = mysqli_query($conn, "SELECT * FROM products");
                        while($row = mysqli_fetch_array($products)){
                        ?>
                <div class="product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="product_extended.php?product=<?php echo $row['id'];?>"><img src="admin/<?php echo $row['pimg'];?>" alt="" class="img-reponsive"></a>
                                            <div class="ribbon-price red"><span>- 30% </span></div>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group">
                                            </div>
                                            <div class="element-list element-list-left">
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <p class="product-cate">
                                                <?php 
                                                $category = mysqli_query($conn, "SELECT * FROM product_category WHERE cat_id = '".$row['catnameid']."'");
                                                $cat = mysqli_fetch_assoc($category);
                                                echo $cat['cat_name'];
                                                ?>
                                                </p>
                                                <h3 class="product-title"><a href="product_extended.php?product=<?php echo $row['id'];?>"><?php echo $row['pname'];?></a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>Kshs <?php echo $row['pprice'];?></span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php } ?>
            </div>
        </div>
    </div>
    
    <?php require 'includes/footer.php';?>
    <!-- /footer -->
    <!-- /footer -->
<?php } ?>

</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>