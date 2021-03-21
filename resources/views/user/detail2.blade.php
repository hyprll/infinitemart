@extends('template.User2')

@section('title', "Detail | InfiniteMart")

@section('content')
<div id="detailSectionReadOnly">
    <div class="row d-none">
        <span id="idProduk" data-idproduk="{{$idProduk}}"></span>
    </div>
</div>

<!-- Start Product Details Section -->
<div class="product-details-section" style="margin-top: 5rem">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                    <!-- Start Large Image -->
                    <div class="product-large-image product-large-image-horaizontal swiper-container">
                        <div class="swiper-wrapper">
                            <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                <img src="" alt="" class="imgDetailMain1">
                            </div>
                            <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                <img src="" alt="" class="imgDetailMain1">
                            </div>
                        </div>
                    </div>
                    <!-- End Large Image -->
                    <!-- Start Thumbnail Image -->
                    <div class="product-image-thumb product-image-thumb-horizontal swiper-container pos-relative mt-5">
                        <div class="swiper-wrapper">
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid imgOtherDetailMain1" src="" alt="">
                            </div>
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid imgOtherDetailMain2" src="" alt="">
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="gallery-thumb-arrow swiper-button-next"></div>
                        <div class="gallery-thumb-arrow swiper-button-prev"></div>
                    </div>
                    <!-- End Thumbnail Image -->
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="product-details-content-area product-details--golden" data-aos="fade-up"
                    data-aos-delay="200">
                    <!-- Start  Product Details Text Area-->
                    <div class="product-details-text">
                        <h4 class="title titleDetail"></h4>
                        <div class="d-flex align-items-center">
                            Stock Available
                        </div>
                        <div class="price priceDetail">Rp. 1.500.000</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                            tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis
                            justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                            nulla.</p>
                    </div> <!-- End  Product Details Text Area-->
                    <!-- Start Product Variable Area -->
                    <div class="product-details-variable">
                        <h4 class="title">Add a Note</h4>
                        <!-- Product Variable Single Item -->
                        <div class="product-variable-quantity">
                            <input type="text" placeholder="Note" class="w-100" id="detailQuickViewNote">
                        </div>
                        <!-- Product Variable Single Item -->
                        <div class="d-flex align-items-center ">
                            <div class="variable-single-item ">
                                <span>Quantity</span>
                                <div class="product-variable-quantity">
                                    <input min="1" max="100" value="1" type="number">
                                </div>
                            </div>

                            <div class="product-add-to-cart-btn">
                                <a href="#" class="btn btn-block btn-lg btn-black-default-hover">Buy Now</a>
                            </div>
                        </div>
                    </div> <!-- End Product Variable Area -->

                    <!-- Start  Product Details Social Area-->
                    <div class="product-details-social">
                        <span class="title">SHARE THIS PRODUCT:</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> <!-- End  Product Details Social Area-->
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Product Details Section -->

<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-top-gap-100 section-fluid" style="margin-bottom: 5rem">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">RELATED PRODUCTS</h3>
                            <p>Browse the collection of our related products.</p>
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

<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button">
    <i class="fas fa-angle-up text-white" style="font-size: 25px;"></i>
</button>

@endsection