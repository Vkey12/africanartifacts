<div class="feature">
            <div class="container container-240">
                <div class="feature-inside">
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="img/feature/truck.png" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Worldwide Delivery</h3>
                            <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                        </div>
                    </div>
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="img/feature/credit-card.png" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Safe Payment</h3>
                            <p>Pay with the world’s most popular and secure payment methods.</p>
                        </div>
                    </div>
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="img/feature/safety.png" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Shop with Confidence</h3>
                            <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                        </div>
                    </div>
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="img/feature/telephone.png" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>24/7 Help Center</h3>
                            <p>Round-the-clock assistance for a smooth shopping experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / end content -->
        <footer>
            <div class="f-top">
                <div class="container container-240">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="footer-block footer-about">
                                <div class="f-logo">
                                    <a href="#"><img src="img/logo.png" alt="" class="img-reponsive"></a>
                                </div>
                                <ul class="footer-block-content">
                                    <li class="address">
                                        <span> Ngara, Naorobi Kenya</span>
                                    </li>
                                    <li class="phone">
                                        <span>(+123) 456 789 - (+123) 666 888</span>
                                    </li>
                                    <li class="email">
                                        <span>Contact@yourcompany.com</span>
                                    </li>
                                    <li class="time">
                                        <span>Mon-Sat 9:00pm - 5:00pm &nbsp;&nbsp;&nbsp; Sun : Closed</span>
                                    </li>
                                </ul>
                                <div class="footer-social social">
                                    <h3 class="footer-block-title">Follow us</h3>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-dribbble"></a>
                                    <a href="#" class="fa fa-behance"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Quick menu</h3>
                                <ul class="footer-block-content">
                                <?php
                                $cat = mysqli_query($conn, "select * from product_category");
                                $cnt = 1;


                                while ($row = mysqli_fetch_array($cat)) {




                                ?>
                                    <li><a href="#"><?php echo $row['cat_name'];?></a></li>
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Customer Service</h3>
                                <ul class="footer-block-content">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Track your Order</a></li>
                                    <li><a href="#">Returns/Exchange</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="footer-block">
                                <div class="footer-block-phone">
                                    <h3 class="footer-block-title">Hot Line</h3>
                                    <p class="phone-desc">Call Us toll Free</p>
                                    <p class="phone-light">(+123) 456 789 or (+123) 666 888</p>
                                </div>
                                <div class="footer-block-newsletter">
                                    <h3 class="footer-block-title">Subscription</h3>
                                    <p>Register now to get updates on promotions and coupons.</p>
                                    <form class="form_newsletter" action="#" method="post">
                                        <input type="email" value="" placeholder="Enter your emaill adress" name="EMAIL" id="mail" class="newsletter-input form-control">
                                        <button id="subscribe" class="button_mini btn btn-gradient" type="submit">
                                            Subscribe
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-bottom">
                <div class="container container-240">
                    <div class="row flex lr">
                        <div class="col-xs-6 f-copyright"><span>© 2022 African Artifacts. All rights reserved.</span></div>
                        <div class="col-xs-6 f-payment hidden-xs">
                            <a href="#"><img src="img/payment/mastercard.png" alt="" class="img-reponsive"></a>
                            <a href="#"><img src="img/payment/paypal.png" alt="" class="img-reponsive"></a>
                            <a href="#"><img src="img/payment/visa.png" alt="" class="img-reponsive"></a>
                            <a href="#"><img src="img/payment/american-express.png" alt="" class="img-reponsive"></a>
                            <a href="#"><img src="img/payment/western-union.png" alt="" class="img-reponsive"></a>
                            <a href="#"><img src="img/payment/jcb.png" alt="" class="img-reponsive"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /footer -->