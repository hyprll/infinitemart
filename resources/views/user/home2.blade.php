@extends('template.User2')

@section('title', "Home | InfiniteMart")

@section('content')
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
                                    <a href="product-details-default.html" class="btn btn-lg btn-outline-golden">shop
                                        now </a>
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
                                    <a href="product-details-default.html" class="btn btn-lg btn-outline-golden">shop
                                        now </a>
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

<div id="homeSectionReadOnly"></div>

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
                            <div class="swiper-wrapper" id="produk-all"></div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev h4"><i class="fa fa-angle-left"></i></div>
                        <div class="swiper-button-next h4"><i class="fa fa-angle-right"></i></div>
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
                            <div class="swiper-wrapper" id="produk-slider"></div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev h4"><i class="fa fa-angle-left"></i></div>
                        <div class="swiper-button-next h4"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Default Slider Section -->

<!-- Start Instagramr Section -->
<div class="instagram-section section-top-gap-100" style="margin-bottom: 7rem">
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