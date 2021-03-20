@extends('template.User2')

@section('title', "Home | InfiniteMart")

@section('content')
        <!-- Start Offcanvas Addcart Section -->
        <div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
            <!-- Start Offcanvas Header -->
            <div class="offcanvas-header text-right">
                <button class="offcanvas-close"><i class="ion-android-close"></i></button>
            </div> <!-- End Offcanvas Header -->
    
            <!-- Start  Offcanvas Addcart Wrapper -->
            <div class="offcanvas-add-cart-wrapper">
                <h4 class="offcanvas-title">Shopping Cart</h4>
                <ul class="offcanvas-cart">
                    <li class="offcanvas-cart-item-single">
                        <div class="offcanvas-cart-item-block">
                            <a href="#" class="offcanvas-cart-item-image-link">
                                <img src="{{asset('img')}}/product/default/home-1/default-1.jpg" alt=""
                                    class="offcanvas-cart-image">
                            </a>
                            <div class="offcanvas-cart-item-content">
                                <a href="#" class="offcanvas-cart-item-link">Car Wheel</a>
                                <div class="offcanvas-cart-item-details">
                                    <span class="offcanvas-cart-item-details-quantity">1 x </span>
                                    <span class="offcanvas-cart-item-details-price">$49.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas-cart-item-delete text-right">
                            <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </li>
                    <li class="offcanvas-cart-item-single">
                        <div class="offcanvas-cart-item-block">
                            <a href="#" class="offcanvas-cart-item-image-link">
                                <img src="{{asset('img')}}/product/default/home-2/default-1.jpg" alt=""
                                    class="offcanvas-cart-image">
                            </a>
                            <div class="offcanvas-cart-item-content">
                                <a href="#" class="offcanvas-cart-item-link">Car Vails</a>
                                <div class="offcanvas-cart-item-details">
                                    <span class="offcanvas-cart-item-details-quantity">3 x </span>
                                    <span class="offcanvas-cart-item-details-price">$500.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas-cart-item-delete text-right">
                            <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </li>
                    <li class="offcanvas-cart-item-single">
                        <div class="offcanvas-cart-item-block">
                            <a href="#" class="offcanvas-cart-item-image-link">
                                <img src="{{asset('img')}}/product/default/home-3/default-1.jpg" alt=""
                                    class="offcanvas-cart-image">
                            </a>
                            <div class="offcanvas-cart-item-content">
                                <a href="#" class="offcanvas-cart-item-link">Shock Absorber</a>
                                <div class="offcanvas-cart-item-details">
                                    <span class="offcanvas-cart-item-details-quantity">1 x </span>
                                    <span class="offcanvas-cart-item-details-price">$350.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas-cart-item-delete text-right">
                            <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </li>
                </ul>
                <div class="offcanvas-cart-total-price">
                    <span class="offcanvas-cart-total-price-text">Subtotal:</span>
                    <span class="offcanvas-cart-total-price-value">$170.00</span>
                </div>
                <ul class="offcanvas-cart-action-button">
                    <li><a href="cart.html" class="btn btn-block btn-golden">View Cart</a></li>
                    <li><a href="compare.html" class=" btn btn-block btn-golden mt-5">Checkout</a></li>
                </ul>
            </div> <!-- End  Offcanvas Addcart Wrapper -->
    
        </div> <!-- End  Offcanvas Addcart Section -->
    
        <!-- Start Offcanvas Mobile Menu Section -->
        <div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
            <!-- Start Offcanvas Header -->
            <div class="offcanvas-header text-right">
                <button class="offcanvas-close"><i class="ion-android-close"></i></button>
            </div> <!-- ENd Offcanvas Header -->
    
            <!-- Start Offcanvas Mobile Menu Wrapper -->
            <div class="offcanvas-wishlist-wrapper">
                <h4 class="offcanvas-title">Wishlist</h4>
                <ul class="offcanvas-wishlist">
                    <li class="offcanvas-wishlist-item-single">
                        <div class="offcanvas-wishlist-item-block">
                            <a href="#" class="offcanvas-wishlist-item-image-link">
                                <img src="{{asset('img')}}/product/default/home-1/default-1.jpg" alt=""
                                    class="offcanvas-wishlist-image">
                            </a>
                            <div class="offcanvas-wishlist-item-content">
                                <a href="#" class="offcanvas-wishlist-item-link">Car Wheel</a>
                                <div class="offcanvas-wishlist-item-details">
                                    <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                    <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas-wishlist-item-delete text-right">
                            <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </li>
                    <li class="offcanvas-wishlist-item-single">
                        <div class="offcanvas-wishlist-item-block">
                            <a href="#" class="offcanvas-wishlist-item-image-link">
                                <img src="{{asset('img')}}/product/default/home-2/default-1.jpg" alt=""
                                    class="offcanvas-wishlist-image">
                            </a>
                            <div class="offcanvas-wishlist-item-content">
                                <a href="#" class="offcanvas-wishlist-item-link">Car Vails</a>
                                <div class="offcanvas-wishlist-item-details">
                                    <span class="offcanvas-wishlist-item-details-quantity">3 x </span>
                                    <span class="offcanvas-wishlist-item-details-price">$500.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas-wishlist-item-delete text-right">
                            <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </li>
                    <li class="offcanvas-wishlist-item-single">
                        <div class="offcanvas-wishlist-item-block">
                            <a href="#" class="offcanvas-wishlist-item-image-link">
                                <img src="{{asset('img')}}/product/default/home-3/default-1.jpg" alt=""
                                    class="offcanvas-wishlist-image">
                            </a>
                            <div class="offcanvas-wishlist-item-content">
                                <a href="#" class="offcanvas-wishlist-item-link">Shock Absorber</a>
                                <div class="offcanvas-wishlist-item-details">
                                    <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                    <span class="offcanvas-wishlist-item-details-price">$350.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas-wishlist-item-delete text-right">
                            <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </li>
                </ul>
                <ul class="offcanvas-wishlist-action-button">
                    <li><a href="#" class="btn btn-block btn-golden">View wishlist</a></li>
                </ul>
            </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    
        </div> <!-- End Offcanvas Mobile Menu Section -->
    
        <!-- Start Offcanvas Search Bar Section -->
        <div id="search" class="search-modal">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" placeholder="type keyword(s) here" />
                <button type="submit" class="btn btn-lg btn-golden">Search</button>
            </form>
        </div>
        <!-- End Offcanvas Search Bar Section -->
    
        <!-- Offcanvas Overlay -->
        <div class="offcanvas-overlay"></div>
    
        <!-- Start Hero Slider Section-->
        <div class="hero-slider-section">
            <!-- Slider main container -->
            <div class="hero-slider-active swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Start Hero Single Slider Item -->
                    <div class="hero-single-slider-item swiper-slide">
                        <!-- Hero Slider Image -->
                        <div class="hero-slider-bg">
                            <img src="{{asset('img')}}/hero-slider/home-1/hero-slider-1.jpg" alt="">
                        </div>
                        <!-- Hero Slider Content -->
                        <div class="hero-slider-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="hero-slider-content">
                                            <h4 class="subtitle">New collection</h4>
                                            <h2 class="title">Best Of NeoCon <br> Gold Award </h2>
                                            <a href="product-details-default.html"
                                                class="btn btn-lg btn-outline-golden">shop now </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Hero Single Slider Item -->
                    <!-- Start Hero Single Slider Item -->
                    <div class="hero-single-slider-item swiper-slide">
                        <!-- Hero Slider Image -->
                        <div class="hero-slider-bg">
                            <img src="{{asset('img')}}/hero-slider/home-1/hero-slider-2.jpg" alt="">
                        </div>
                        <!-- Hero Slider Content -->
                        <div class="hero-slider-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="hero-slider-content">
                                            <h4 class="subtitle">New collection</h4>
                                            <h2 class="title">Luxy Chairs <br> Design Award </h2>
                                            <a href="product-details-default.html"
                                                class="btn btn-lg btn-outline-golden">shop now </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Hero Single Slider Item -->
                </div>
    
                <!-- If we need pagination -->
                <div class="swiper-pagination active-color-golden"></div>
    
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev d-none d-lg-block"></div>
                <div class="swiper-button-next d-none d-lg-block"></div>
            </div>
        </div>
        <!-- End Hero Slider Section-->
    
        <!-- Start Service Section -->
        <div class="service-promo-section section-top-gap-100">
            <div class="service-wrapper">
                <div class="container">
                    <div class="row">
                        <!-- Start Service Promo Single Item -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                                <div class="image">
                                    <img src="{{asset('img')}}/icons/service-promo-1.png" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">FREE SHIPPING</h6>
                                    <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Promo Single Item -->
                        <!-- Start Service Promo Single Item -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="image">
                                    <img src="{{asset('img')}}/icons/service-promo-2.png" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">30 DAYS MONEY BACK</h6>
                                    <p>100% satisfaction guaranteed, or get your money back within 30 days!</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Promo Single Item -->
                        <!-- Start Service Promo Single Item -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="image">
                                    <img src="{{asset('img')}}/icons/service-promo-3.png" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">SAFE PAYMENT</h6>
                                    <p>Pay with the world’s most popular and secure payment methods.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Promo Single Item -->
                        <!-- Start Service Promo Single Item -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="600">
                                <div class="image">
                                    <img src="{{asset('img')}}/icons/service-promo-4.png" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">LOYALTY CUSTOMER</h6>
                                    <p>Card for the other 30% of their purchases at a rate of 1% cash back.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Promo Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Service Section -->
    
        <!-- Start Product Default Slider Section -->
        <div class="product-default-slider-section section-top-gap-100 section-fluid">
            <!-- Start Section Content Text Area -->
            <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content-gap">
                                <div class="secton-content">
                                    <h3 class="section-title">THE NEW ARRIVALS</h3>
                                    <p>Preorder now to receive exclusive deals & gifts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Section Content Text Area -->
            <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-slider-default-2rows default-slider-nav-arrow">
                                <!-- Slider main container -->
                                <div class="swiper-container product-default-slider-4grid-2row">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-1.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-2.jpg" alt="">
                                                </a>
                                                <div class="tag">
                                                    <span>sale</span>
                                                </div>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Aliquam
                                                            lobortis</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$75.00 - $85.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-3.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-4.jpg" alt="">
                                                </a>
                                                <div class="tag">
                                                    <span>sale</span>
                                                </div>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Condimentum
                                                            posuere</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price"><del>$89.00</del> $80.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-5.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-6.jpg" alt="">
                                                </a>
                                                <div class="tag">
                                                    <span>sale</span>
                                                </div>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Cras neque
                                                            metus</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price"><del>$70.00</del> $60.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-7.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-8.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Donec eu libero
                                                            ac</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$74</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-9.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-10.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Epicuri per
                                                            lobortis</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$68</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-11.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-3.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Kaoreet
                                                            lobortis sagit</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$95.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-5.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-7.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Condimentum
                                                            posuere</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$115.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-6.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-9.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Convallis quam
                                                            sit</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$75.00 - $85.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-3.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-5.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Dolorum fuga
                                                            eget</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$71.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-4.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-7.jpg" alt="">
                                                </a>
                                                <div class="tag">
                                                    <span>sale</span>
                                                </div>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Duis pulvinar
                                                            obortis</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price"><del>$84.00</del> $75.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-5.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-8.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Dolorum fuga
                                                            eget</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$90</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-10.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-6.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Duis pulvinar
                                                            obortis</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$86.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                    </div>
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Default Slider Section -->
    
        <!-- Start Banner Section -->
        <div class="banner-section section-top-gap-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <!-- Start Banner Single Item -->
                        <div class="banner-single-item banner-style-3 banner-animation img-responsive" data-aos="fade-up"
                            data-aos-delay="0">
                            <div class="image">
                                <img class="img-fluid" src="{{asset('img')}}/banner/banner-style-3-img-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title">Modern Furniture
                                    Basic Collection</h3>
                                <h5 class="sub-title">We design your home more beautiful</h5>
                                <a href="product-details-default.html"
                                    class="btn btn-lg btn-outline-golden icon-space-left"><span
                                        class="d-flex align-items-center">discover now</span></a>
                            </div>
                        </div>
                        <!-- End Banner Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Section -->
    
        <!-- Start Product Default Slider Section -->
        <div class="product-default-slider-section section-top-gap-100 section-fluid section-inner-bg">
            <!-- Start Section Content Text Area -->
            <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content-gap">
                                <div class="secton-content">
                                    <h3 class="section-title">BEST SELLERS</h3>
                                    <p>Add our best sellers to your weekly lineup.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Section Content Text Area -->
            <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-slider-default-1row default-slider-nav-arrow">
                                <!-- Slider main container -->
                                <div class="swiper-container product-default-slider-4grid-1row">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-9.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-10.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Epicuri per
                                                            lobortis</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$68</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-11.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-3.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Kaoreet
                                                            lobortis sagit</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$95.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-5.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-7.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Condimentum
                                                            posuere</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$115.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-6.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-9.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Convallis quam
                                                            sit</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$75.00 - $85.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-1.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-2.jpg" alt="">
                                                </a>
                                                <div class="tag">
                                                    <span>sale</span>
                                                </div>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Aliquam
                                                            lobortis</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$75.00 - $85.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-3.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-4.jpg" alt="">
                                                </a>
                                                <div class="tag">
                                                    <span>sale</span>
                                                </div>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Condimentum
                                                            posuere</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price"><del>$89.00</del> $80.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-5.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-6.jpg" alt="">
                                                </a>
                                                <div class="tag">
                                                    <span>sale</span>
                                                </div>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Cras neque
                                                            metus</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price"><del>$70.00</del> $60.00</span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-7.jpg" alt="">
                                                    <img src="{{asset('img')}}/product/default/home-1/default-8.jpg" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                        <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a href="product-details-default.html">Donec eu libero
                                                            ac</a></h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="fill"><i class="fas fa-star" style="color: gold"></i></li>
                                                        <li class="empty"><i class="far fa-star" style="color: gold"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">$74</span>
                                                </div>
    
                                            </div>
                                        </div> <!-- End Product Default Single Item -->
                                    </div>
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Default Slider Section -->
    
        <!-- Start Banner Section -->
        <div class="banner-section">
            <div class="banner-wrapper clearfix">
                <!-- Start Banner Single Item -->
                <div class="banner-single-item banner-style-4 banner-animation banner-color--golden float-left img-responsive"
                    data-aos="fade-up" data-aos-delay="0">
                    <div class="image">
                        <img class="img-fluid" src="{{asset('img')}}/banner/banner-style-4-img-1.jpg" alt="">
                    </div>
                    <a href="product-details-default.html" class="content">
                        <div class="inner">
                            <h4 class="title">Bar Stool</h4>
                            <h6 class="sub-title">20 products</h6>
                        </div>
                    </a>
                </div>
                <!-- End Banner Single Item -->
                <!-- Start Banner Single Item -->
                <div class="banner-single-item banner-style-4 banner-animation banner-color--golden float-left img-responsive"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="image">
                        <img class="img-fluid" src="{{asset('img')}}/banner/banner-style-4-img-2.jpg" alt="">
                    </div>
                    <a href="product-details-default.html" class="content">
                        <div class="inner">
                            <h4 class="title">Armchairs</h4>
                            <h6 class="sub-title">20 products</h6>
                        </div>
                    </a>
                </div>
                <!-- End Banner Single Item -->
                <!-- Start Banner Single Item -->
                <div class="banner-single-item banner-style-4 banner-animation banner-color--golden float-left img-responsive"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="image">
                        <img class="img-fluid" src="{{asset('img')}}/banner/banner-style-4-img-3.jpg" alt="">
                    </div>
                    <a href="product-details-default.html" class="content">
                        <div class="inner">
                            <h4 class="title">lighting</h4>
                            <h6 class="sub-title">20 products</h6>
                        </div>
                    </a>
                </div>
                <!-- End Banner Single Item -->
                <!-- Start Banner Single Item -->
                <div class="banner-single-item banner-style-4 banner-animation banner-color--golden float-left img-responsive"
                    data-aos="fade-up" data-aos-delay="600">
                    <div class="image">
                        <img class="img-fluid" src="{{asset('img')}}/banner/banner-style-4-img-4.jpg" alt="">
                    </div>
                    <a href="product-details-default.html" class="content">
                        <div class="inner">
                            <h4 class="title">Easy chairs</h4>
                            <h6 class="sub-title">20 products</h6>
                        </div>
                    </a>
                </div>
                <!-- End Banner Single Item -->
            </div>
        </div>
        <!-- End Banner Section -->
    
        <!-- Start Instagramr Section -->
        <div class="instagram-section section-top-gap-100 section-inner-bg">
            <div class="instagram-wrapper" data-aos="fade-up" data-aos-delay="0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="instagram-box">
                                <div id="instagramFeed" class="instagram-grid clearfix">
                                    <a href="https://www.instagram.com/p/CCFOZKDDS6S/" target="_blank"
                                        class="instagram-image-link float-left banner-animation"><img
                                            src="{{asset('img')}}/instagram/instagram-1.jpg" alt=""></a>
                                    <a href="https://www.instagram.com/p/CCFOYDNjWF5/" target="_blank"
                                        class="instagram-image-link float-left banner-animation"><img
                                            src="{{asset('img')}}/instagram/instagram-2.jpg" alt=""></a>
                                    <a href="https://www.instagram.com/p/CCFOXH6D-zQ/" target="_blank"
                                        class="instagram-image-link float-left banner-animation"><img
                                            src="{{asset('img')}}/instagram/instagram-3.jpg" alt=""></a>
                                    <a href="https://www.instagram.com/p/CCFOVcrDDOo/" target="_blank"
                                        class="instagram-image-link float-left banner-animation"><img
                                            src="{{asset('img')}}/instagram/instagram-4.jpg" alt=""></a>
                                    <a href="https://www.instagram.com/p/CCFOUajjABP/" target="_blank"
                                        class="instagram-image-link float-left banner-animation"><img
                                            src="{{asset('img')}}/instagram/instagram-5.jpg" alt=""></a>
                                    <a href="https://www.instagram.com/p/CCFOS2MDmjj/" target="_blank"
                                        class="instagram-image-link float-left banner-animation"><img
                                            src="{{asset('img')}}/instagram/instagram-6.jpg" alt=""></a>
                                </div>
                                <div class="instagram-link">
                                    <h5><a href="https://www.instagram.com/internetSlim/" target="_blank"
                                            rel="noopener noreferrer">InternetSlim</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Instagramr Section -->
@endsection