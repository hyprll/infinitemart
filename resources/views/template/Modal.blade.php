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

<!-- Start Modal Quickview cart -->
<div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-right">
                            <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-details-gallery-area mb-7">
                                <!-- Start Large Image -->
                                <div class="product-large-image modal-product-image-large swiper-container">
                                    <div class="swiper-wrapper" id="quickViewModal1">
                                        <div class="product-image-large-image swiper-slide img-responsive">
                                            <img src="" style="height: 350px" alt="">
                                        </div>
                                        <div class="product-image-large-image swiper-slide img-responsive">
                                            <img src="" style="height: 350px" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Large Image -->
                                <!-- Start Thumbnail Image -->
                                <div
                                    class="product-image-thumb modal-product-image-thumb swiper-container pos-relative mt-5">
                                    <div class="swiper-wrapper" id="quickViewModal2">
                                        <div class="product-image-thumb-single swiper-slide">
                                            <img class="img-fluid" src="" alt="">
                                        </div>
                                        <div class="product-image-thumb-single swiper-slide">
                                            <img class="img-fluid" src="" alt="">
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="gallery-thumb-arrow swiper-button-next"></div>
                                    <div class="gallery-thumb-arrow swiper-button-prev"></div>
                                </div>
                                <!-- End Thumbnail Image -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-product-details-content-area">
                                <!-- Start  Product Details Text Area-->
                                <div class="product-details-text">
                                    <h4 class="title" id="detailQuickViewTitle"></h4>
                                    <div class="price" id="detailQuickViewFare"></div>
                                </div> <!-- End  Product Details Text Area-->
                                <!-- Start Product Variable Area -->
                                <div class="product-details-variable">
                                    <!-- Product Variable Single Item -->
                                    <div class="variable-single-item">
                                        <span>Note</span>
                                        <div class="product-variable-quantity">
                                            <input type="text" placeholder="Note" class="w-100"
                                                id="detailQuickViewNote">
                                        </div>
                                    </div>
                                    <!-- Product Variable Single Item -->
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="variable-single-item ">
                                            <span>Quantity</span>
                                            <div class="product-variable-quantity">
                                                <input min="1" max="100" value="1" type="number"
                                                    id="detailQuickViewQuantity">
                                            </div>
                                        </div>

                                        <div class="product-add-to-cart-btn">
                                            <a href="#" data-bs-toggle="modal" id="detailQuickViewBuy">Buy Now</a>
                                        </div>
                                    </div>
                                </div> <!-- End Product Variable Area -->
                                <div class="modal-product-about-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                        laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                        in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                        recusandae</p>
                                </div>
                                <!-- Start  Product Details Social Area-->
                                <div class="modal-product-details-social">
                                    <span class="title">SHARE THIS PRODUCT</span>
                                    <ul>
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>

                                </div> <!-- End  Product Details Social Area-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Modal Quickview cart -->