<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodKa - Food Ordering, Delivery & Restuarent Template</title>
    <!--fivicon icon-->
    <link rel="icon" href="assets/page/img/fevicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/page/css/animate.min.css">
    <link rel="stylesheet" href="assets/page/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/page/css/magnific.min.css">
    <link rel="stylesheet" href="assets/page/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/page/css/owl.min.css">
    <link rel="stylesheet" href="assets/page/css/slick-slide.min.css">
    <link rel="stylesheet" href="assets/page/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/page/css/remixicon/remixicon.css">
    <link rel="stylesheet" href="assets/page/css/style.css">
    <link rel="stylesheet" href="assets/page/css/responsive.css">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&family=Bebas+Neue&family=Satisfy&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">


</head>
<body class='sc5'>
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div id="wave1">
            </div>
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
    <!-- search popup area start -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!-- navbar start -->
    <header class="navbar-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <?=menu()?>
                </div>
                <div class="logo">
                    <a class="main-logo" href="home-1.html"><img src="assets/page/img/logo.png" alt="img"></a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <ul>
                        <li><a class="search" href="#"><i class="ri-search-line"></i></a>
                        </li>
                        <li class="phone-contact d-md-block d-none"><i class="ri-phone-fill float-start"></i>
                            +997 509 153 849
                        </li>
                        <li class="menu-cart"><a href="cart.html">CART <span>1</span></a></li>
                        <li>49.50 $</li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">                    
                    <ul>
                        <li><a class="search" href="#"><i class="ri-search-line"></i></a>
                        </li>
                        <li class="phone-contact"><i class="ri-phone-fill float-start"></i>
                            +997 509 153 849
                        </li>
                        <li class="menu-cart"><a href="cart.html">CART <span>1</span></a></li>
                        <li>49.50 $</li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- navbar end -->

    <!-- bredcrumb Area Start-->
    <section class="breadcrumb-area">
        <div class="banner-bg-img"></div>
        <div class="banner-shape-1"><img src="assets/page/img/banner/shape-1.png" alt="img"></div>
        <div class="banner-shape-2"><img src="assets/page/img/banner/shape-2.png" alt="img"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 align-self-center">
                    <div class="banner-inner text-center">
                        <h3>Checkout
                        </h3>
                        <h1>delivery & payment info
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                              <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bredcrumb Area End --> 

    <!-- checkout area start -->
    <div class="checkout-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bill-payment-wrap">
                        <h5>Billing details
                        </h5>
                        <form class="default-form-wrap style-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <div class="single-input-wrap">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                    <div class="single-input-wrap">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Country</label>
                                    <div class="single-input-wrap">
                                        <input type="text" class="form-control" placeholder="Type Your Country">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Street address</label>
                                    <div class="single-input-wrap">
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Permanent address</label>
                                    <div class="single-input-wrap">
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
                <div class="col-lg-5">
                    <div class="order-area">
                        <h5 class="title">Your order</h5>
                        <div class="order-product">
                            <div class="thumb">
                                <img src="assets/page/img/widget/01.png" alt="img">
                            </div>
                            <div class="details">
                                <h6>All Season Gulliver Pizza</h6>
                                <ul>
                                    <li><span>Select Size: </span>Large</li>
                                    <li><span>Select Crust: </span>Double Crust</li>
                                </ul>
                            </div>
                        </div>
                        <ul class="amount">
                            <li>Subtotal<span>$50.00</span></li>
                            <li class="total">Total<span>$50.00</span></li>
                        </ul>
                        <div class="peyment-method">
                            <h6>Check payments</h6>
                            <ul class="card-area">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                        </label>
                                    </div>
                                    <div class="details">
                                        <h6>Credit Cart <img src="assets/page/img/icon/peyment-card.png" alt="img"></h6>
                                        <p>Pay with visa, Anex, MasterCard, Maestro,Discover and many other credit and debit credit vai paypal</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                        </label>
                                    </div>
                                    <div class="details">
                                        <h6>PayPal <img src="assets/page/img/icon/paypal-card.png" alt="img"></h6>
                                        <p>Pay easily, fast and secure with PayPal.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-secondary w-100" href="#"> PLACE ORDER</a>
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <!-- checkout area end -->

    <!-- footer area start -->
    <footer class="footer-area pd-top-100">
        <div class="footer-inner padding-top-100 padding-bottom-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget widget">
                            <div class="logo">
                                <img src="assets/page/img/logo.png" alt="img">
                            </div>
                            <ul class="contact_info_list">
                                <li class="single-info-item">
                                    <img src="assets/page/img/icon/location.png" alt="icon">
                                    <div class="details">
                                        4920 Trails End Road Ft  United States, FL 33311
                                    </div>
                                </li>
                                <li class="single-info-item">
                                    <img src="assets/page/img/icon/envelope.png" alt="icon">
                                    <div class="details">
                                        ordernow@foodka.com
                                    </div>
                                </li>
                                <li class="single-info-item">
                                    <img src="assets/page/img/icon/phone.png" alt="icon">
                                    <div class="details">
                                        +997 509 153 849
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget widget widget_link">
                            <h4 class="widget-title">Hot Menu</h4>
                            <ul>
                                <li><a href="menu-list.html">Burger King Whopper</a></li>
                                <li><a href="menu-list.html">Five Guys Cheeseburger</a></li>
                                <li><a href="menu-list.html">KFC Original Recipe Chicken</a></li>
                                <li><a href="menu-list.html">Wendy's Frosty</a></li>
                                <li><a href="menu-list.html">McDonald's Happy Meal</a></li>
                                <li><a href="menu-list.html">Domino's Pepperoni Pizza</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget widget widget_link">
                            <h4 class="widget-title">Opening Hours</h4>
                            <ul>
                                <li>Monday : 09.00am-10.00pm</li>
                                <li>Tuesday : 09.00am-10.00pm</li>
                                <li>Wednesday : 09.00am-10.00pm</li>
                                <li>Thursday : 09.00am-10.00pm</li>
                                <li>Friday  : 09.00am-10.00pm</li>
                                <li>Saturday & Sunday : <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget widget widget_instagram_feeds">
                            <h4 class="widget-title">Instagram Feeds</h4>
                            <ul>
                                <li><a href="#"><img src="assets/page/img/instagram/1.png" alt="instagram"></a></li>
                                <li><a href="#"><img src="assets/page/img/instagram/2.png" alt="instagram"></a></li>
                                <li><a href="#"><img src="assets/page/img/instagram/3.png" alt="instagram"></a></li>
                                <li><a href="#"><img src="assets/page/img/instagram/4.png" alt="instagram"></a></li>
                                <li><a href="#"><img src="assets/page/img/instagram/5.png" alt="instagram"></a></li>
                                <li><a href="#"><img src="assets/page/img/instagram/6.png" alt="instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-md-start text-center">
                        <div class="copyright-area">
                            <p>© 2021 Foodka. All Rights Reserved by Themefie</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="social-area text-md-end text-center mt-md-0 mt-2">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li> 
                            <li><a href="#"><i class="fab fa-behance"></i></a></li> 
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->    

    <!-- back-to-top end -->
    <div class="back-to-top">
        <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
    </div>

    

    <!-- all plugins here -->
    <script src="assets/page/js/jquery.3.6.min.js"></script>
    <script src="assets/page/js/jquery-ui.min.js"></script>
    <script src="assets/page/js/bootstrap.min.js"></script>
    <script src="assets/page/js/imageloded.min.js"></script>
    <script src="assets/page/js/counterup.js"></script>
    <script src="assets/page/js/waypoint.js"></script>
    <script src="assets/page/js/magnific.min.js"></script>
    <script src="assets/page/js/isotope.pkgd.min.js"></script>
    <script src="assets/page/js/nice-select.min.js"></script>
    <script src="assets/page/js/fontawesome.min.js"></script>
    <script src="assets/page/js/owl.min.js"></script>
    <script src="assets/page/js/slick-slider.min.js"></script>
    <script src="assets/page/js/wow.min.js"></script>
    <script src="assets/page/js/tweenmax.min.js"></script>
    <!-- main js  -->
    <script src="assets/page/js/main.js"></script>
</body>
</html>