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
    <link rel="stylesheet" href="assets/page/css/jquery-ui.min.css">
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
<body class='sc5 home-2'>
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
    <header class="navbar-area navbar-area-2">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a class="main-logo" href="home-1.html"><img src="assets/page/img/home-2/logo.png" alt="img"></a>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <?=menu()?>
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
                        <li class="menu-cart"><a href="cart.html"><img src="assets/page/img/home-2/icon/shopping-cart.png" alt="icon"> <span>1</span></a></li>
                        <li>49.50 $</li>
                        <li class="phone-contact"><img class="me-2" src="assets/page/img/home-2/icon/phone.png" alt="icon">
                            +997 509 153 849
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- navbar end -->

    <!-- Banner Area Start-->
    <section class="banner-area banner-area-2">
        <div class="banner-thumb">
            <img src="assets/page/img/home-2/banner/1.png" alt="img">
        </div>
        <div class="banner-bg">
            <div class="banner-bg-img"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 align-self-center">
                    <div class="banner-inner">
                        <h3>Japanese Test</h3>
                        <h1>Different spice for a Different taste</h1>
                        <p>You need not only Just Food Stalls with Persons but also specialized equipment  start the Fast Food</p>
                        <a class="btn btn-secondary" href="shop.html">GET IT NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End --> 
    
    <!-- intro-contact Area Start-->
    <section class="intro-contact-area pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-contact-wrap">
                        <img src="assets/page/img/home-2/icon/calendar.png" alt="icon">
                        <h5>Mon-fri :  10AM -9:30PM</h5>
                        <p>Working Hours </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-contact-wrap single-intro-contact-wrap-active">
                        <img src="assets/page/img/home-2/icon/map-marker.png" alt="icon">
                        <h5>Trails End Road
                            Ft  United States</h5>
                        <p>Store Location</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-contact-wrap">
                        <img src="assets/page/img/home-2/icon/phone-2.png" alt="icon">
                        <h5>+997 509 153 849</h5>
                        <p>Working Hours</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro-contact Area End --> 

    <!-- about Area Start-->
    <section class="about-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="thumb mb-lg-0 mb-4">
                        <img src="assets/page/img/other/about.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title text-lg-start text-center">
                        <h3 class="sub-title">Why choose us</h3>
                        <h2 class="title">Why we are the best</h2>
                        <p>A, blandit euismod ullamcorper vestibulum enim habitasse. Ultrices tincidunt scelerisque elit enim. A neque malesuada in tortor eget justo mauris nec dolor. Consequat risus vitae, ac ac et preparation. He wanted to serve burgers, fries and beverages that tasted .</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-about-wrap style-2">
                                <img src="assets/page/img/icon/1.png" alt="img">
                                Fresh food
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-about-wrap style-2">
                                <img src="assets/page/img/icon/2.png" alt="img">
                                Fast Delivery
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-about-wrap style-2">
                                <img src="assets/page/img/icon/3.png" alt="img">
                                Quality Maintain
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-about-wrap style-2">
                                <img src="assets/page/img/icon/4.png" alt="img">
                                24/7 Service
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about Area End -->

    <!-- offer Area Start-->
    <section class="offer-area pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 align-self-center d-contents">
                    <div class="single-offer-wrap single-offer-wrap-2" style="background-color: var(--secondary-color);">
                        <img class="bg-img" src="assets/page/img/home-2/offer/1.png" alt="img">
                        <div class="wrap-details">
                            <h4>Double Cheese</h4>
                            <h1>BURGER </h1>
                            <p>With Free Cocacola. Stay home , we deliver</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="single-offer-wrap single-offer-wrap-3" style="background-color: #000;">
                        <img class="bg-img" src="assets/page/img/home-2/offer/2.png" alt="img">
                        <div class="wrap-details">
                            <h3>Enjoy 30% CashBack</h3>
                            <span>Up to $70 on all Bikash</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="single-offer-wrap single-offer-wrap-4" style="background-color: #F8F7F2;">
                        <img class="bg-img" src="assets/page/img/home-2/offer/3.png" alt="img">
                        <div class="wrap-details text-center">
                            <h3><span>25 EXTRA</span>
                                FREE ON KFC</h3>
                            <p>Stay home , we deliver</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="single-offer-wrap single-offer-wrap-5" style="background: #39251D">
                        <img class="bg-img" src="assets/page/img/home-2/offer/4.png" alt="img">
                        <div class="wrap-details">
                            <h5>Test with</h5>
                            <h3><span>JAPANESE</span>FOOD AT HOME</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Area End --> 

    <!-- product Area Start-->
    <section class="product-area pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="sub-title">Our signature</h3>
                        <h2 class="title">Delicious Deals for Delicious Meals</h2>
                    </div>
                    <ul class="product-nav style-2 nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-ramen-tab" data-bs-toggle="pill" data-bs-target="#pills-ramen" type="button" role="tab" aria-controls="pills-ramen" aria-selected="true"><img src="assets/page/img/category/1.png" alt="img">Ramen</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-pizza-tab" data-bs-toggle="pill" data-bs-target="#pills-pizza" type="button" role="tab" aria-controls="pills-pizza" aria-selected="false"><img src="assets/page/img/category/2.png" alt="img">Pizza</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-burger-tab" data-bs-toggle="pill" data-bs-target="#pills-burger" type="button" role="tab" aria-controls="pills-burger" aria-selected="false"><img src="assets/page/img/category/3.png" alt="img">Burger</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-french-fry-tab" data-bs-toggle="pill" data-bs-target="#pills-french-fry" type="button" role="tab" aria-controls="pills-french-fry" aria-selected="false"><img src="assets/page/img/category/4.png" alt="img">French fries</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-fast-food-tab" data-bs-toggle="pill" data-bs-target="#pills-fast-food" type="button" role="tab" aria-controls="pills-fast-food" aria-selected="false"><img src="assets/page/img/category/5.png" alt="img">Fast food</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-drinks-tab" data-bs-toggle="pill" data-bs-target="#pills-drinks" type="button" role="tab" aria-controls="pills-drinks" aria-selected="false"><img src="assets/page/img/category/6.png" alt="img">Soft drinks</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-ramen" role="tabpanel" aria-labelledby="pills-ramen-tab">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/01.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Double Burger</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/02.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Gulliver Burger</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/03.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Cheese Momos</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/04.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Patty Buns Burgers</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/05.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Margherita Pizza</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/06.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Maxican Pizza</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/07.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Garlic Chicken Pizza</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/08.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">BBQ Chicken Pizza </a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-pizza" role="tabpanel" aria-labelledby="pills-pizza-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/05.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Margherita Pizza</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/06.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Maxican Pizza</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/07.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Garlic Chicken Pizza</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/08.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">BBQ Chicken Pizza </a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-burger" role="tabpanel" aria-labelledby="pills-burger-tab">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/01.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Double Burger</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/02.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Gulliver Burger</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/03.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Cheese Momos</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/04.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Patty Buns Burgers</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-french-fry" role="tabpanel" aria-labelledby="pills-french-fry-tab">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/01.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Double Burger</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/02.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Gulliver Burger</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/03.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Cheese Momos</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/04.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Patty Buns Burgers</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-fast-food" role="tabpanel" aria-labelledby="pills-fast-food-tab">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/01.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Double Burger</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/02.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Gulliver Burger</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/03.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Cheese Momos</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/04.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Patty Buns Burgers</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-drinks" role="tabpanel" aria-labelledby="pills-drinks-tab">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/01.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Double Burger</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/02.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Gulliver Burger</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/03.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Cheese Momos</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/page/img/home-2/product/04.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-fill"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Patty Buns Burgers</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                    </div> 
                                    <div class="btn-area">
                                        <h6 class="price">$17.00</h6>
                                        <a class="btn btn-secondary" href="single-product.html">Add to cart <i class="ri-add-line"></i></a>         
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product Area End -->

    <!-- about Area Start-->
    <section class="about-area pd-top-120 pd-bottom-90" style="background-image: url(assets/page/img/home-2/about/bg.png); background-color: #FAF7F2;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="about-default-thumb">
                        <img src="assets/page/img/home-2/about/1.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 order-lg-first align-self-center">
                    <div class="section-title text-lg-start text-center">
                        <h3 class="sub-title">Why choose us</h3>
                        <h2 class="title">We Have Excellent Of Quality Japanese Food</h2>
                        <p>A, blandit euismod ullamcorper vestibulum enim habitasse. Ultrices tincidunt scelerisque elit enim. A neque malesuada in tortor eget justo mauris nec dolor. Consequat risus vitae, ac ac et preparation. He wanted to serve burgers, fries and beverages that tasted .</p>
                        <a class="btn btn-secondary" href="menu-list.html">CHECK OUR MENU</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about Area End -->

    <!-- testimonial Area Start-->
    <section class="testimonial-area-2 pd-top-110 pd-bottom-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="testimonial-slider owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="thumb">
                                        <img src="assets/page/img/home-2/testimonial/testimonial.png" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 align-self-center">
                                    <div class="testimonial-wrap">
                                        <div class="section-title">
                                            <h3 class="sub-title">Our Testimonials</h3>
                                            <h2 class="title">Over 10,000 Fool lover  say Foodka are best</h2>
                                        </div>
                                        <p>“We have no regrets! I don't know what else to say. It really saves me time and effort. Food is exactly what our business has been lacking”</p>
                                        <h3>Julia R. Davis
                                        </h3>
                                        <h6>Food Bloger</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="thumb">
                                        <img src="assets/page/img/home-2/testimonial/testimonial.png" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 align-self-center">
                                    <div class="testimonial-wrap">
                                        <div class="section-title">
                                            <h3 class="sub-title">Our Testimonials</h3>
                                            <h2 class="title">Over 10,000 Fool lover  say Foodka are best</h2>
                                        </div>
                                        <p>“We have no regrets! I don't know what else to say. It really saves me time and effort. Food is exactly what our business has been lacking”</p>
                                        <h3>Julia R. Davis
                                        </h3>
                                        <h6>Food Bloger</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial Area End -->

    <!-- footer area start -->
    <footer class="footer-area-2 pd-top-100">
        <div class="footer-inner padding-top-100 padding-bottom-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget widget">
                            <div class="logo">
                                <img src="assets/page/img/home-2/logo.png" alt="img">
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
                        <div class="footer-widget widget widget-newsletter">
                            <h4 class="widget-title">Newsletter</h4>
                            <p>Subscribe to get the latest news, update and offer information. Don't worry, we won't send spam!</p>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <input type="email" placeholder="Enter e-mail">
                                </div>
                                <button class="submit-btn" type="submit"><i class="ri-arrow-right-line"></i></button>
                            </form>
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
    <script src="assets/page/js/bootstrap.min.js"></script>
    <script src="assets/page/js/imageloded.min.js"></script>
    <script src="assets/page/js/counterup.js"></script>
    <script src="assets/page/js/waypoint.js"></script>
    <script src="assets/page/js/magnific.min.js"></script>
    <script src="assets/page/js/isotope.pkgd.min.js"></script>
    <script src="assets/page/js/jquery-ui.min.js"></script>
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