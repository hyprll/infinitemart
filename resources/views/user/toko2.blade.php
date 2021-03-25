@extends('template.User2')

@section('title', "Toko | InfiniteMart")

@section('content')

    
    <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                        <div class="ps-product_content"><a class="ps-product_remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                        </div>
                    </div>
                </div>
                <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-panel--sidebar" id="navigation-mobile">
        <div class="ps-panel__header">
            <h3>Categories</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li><a href="#">Hot Promotions</a>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Electronic<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="#">Home Audio &amp; Theathers</a>
                                </li>
                                <li><a href="#">TV &amp; Videos</a>
                                </li>
                                <li><a href="#">Camera, Photos &amp; Videos</a>
                                </li>
                                <li><a href="#">Cellphones &amp; Accessories</a>
                                </li>
                                <li><a href="#">Headphones</a>
                                </li>
                                <li><a href="#">Videosgames</a>
                                </li>
                                <li><a href="#">Wireless Speakers</a>
                                </li>
                                <li><a href="#">Office Electronic</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="#">Digital Cables</a>
                                </li>
                                <li><a href="#">Audio &amp; Video Cables</a>
                                </li>
                                <li><a href="#">Batteries</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#">Clothing &amp; Apparel</a>
                </li>
                <li><a href="#">Home, Garden &amp; Kitchen</a>
                </li>
                <li><a href="#">Health &amp; Beauty</a>
                </li>
                <li><a href="#">Yewelry &amp; Watches</a>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="#">Computer &amp; Tablets</a>
                                </li>
                                <li><a href="#">Laptop</a>
                                </li>
                                <li><a href="#">Monitors</a>
                                </li>
                                <li><a href="#">Networking</a>
                                </li>
                                <li><a href="#">Drive &amp; Storages</a>
                                </li>
                                <li><a href="#">Computer Components</a>
                                </li>
                                <li><a href="#">Security &amp; Protection</a>
                                </li>
                                <li><a href="#">Gaming Laptop</a>
                                </li>
                                <li><a href="#">Accessories</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#">Babies &amp; Moms</a>
                </li>
                <li><a href="#">Sport &amp; Outdoor</a>
                </li>
                <li><a href="#">Phones &amp; Accessories</a>
                </li>
                <li><a href="#">Books &amp; Office</a>
                </li>
                <li><a href="#">Cars &amp; Motocycles</a>
                </li>
                <li><a href="#">Home Improments</a>
                </li>
                <li><a href="#">Vouchers &amp; Services</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="navigation--list">
        <div class="navigation_content"><a class="navigationitem ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigationitem ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigationitem ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation_item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
        <div class="ps-panel__header">
            <form class="ps-form--search-mobile" action="http://nouthemes.net/html/martfury/index.html" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
        <div class="navigation__content"></div>
    </div>
    <div class="ps-panel--sidebar" id="menu-mobile">
        <div class="ps-panel__header">
            <h3>Menu</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                    <ul class="sub-menu">
                        <li><a href="index.html">Marketplace Full Width</a>
                        </li>
                        <li><a href="homepage-2.html">Home Auto Parts</a>
                        </li>
                        <li><a href="homepage-10.html">Home Technology</a>
                        </li>
                        <li><a href="homepage-9.html">Home Organic</a>
                        </li>
                        <li><a href="homepage-3.html">Home Marketplace V1</a>
                        </li>
                        <li><a href="homepage-4.html">Home Marketplace V2</a>
                        </li>
                        <li><a href="homepage-5.html">Home Marketplace V3</a>
                        </li>
                        <li><a href="homepage-6.html">Home Marketplace V4</a>
                        </li>
                        <li><a href="homepage-7.html">Home Electronic</a>
                        </li>
                        <li><a href="homepage-8.html">Home Furniture</a>
                        </li>
                        <li><a href="homepage-kids.html">Home Kids</a>
                        </li>
                        <li><a href="homepage-photo-and-video.html">Home photo and picture</a>
                        </li>
                        <li><a href="home-medical.html">Home Medical</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="shop-default.html">Shop Default</a>
                                </li>
                                <li><a href="shop-default.html">Shop Fullwidth</a>
                                </li>
                                <li><a href="shop-categories.html">Shop Categories</a>
                                </li>
                                <li><a href="shop-sidebar.html">Shop Sidebar</a>
                                </li>
                                <li><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                </li>
                                <li><a href="shop-carousel.html">Shop Carousel</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="product-default.html">Default</a>
                                </li>
                                <li><a href="product-extend.html">Extended</a>
                                </li>
                                <li><a href="product-full-content.html">Full Content</a>
                                </li>
                                <li><a href="product-box.html">Boxed</a>
                                </li>
                                <li><a href="product-sidebar.html">Sidebar</a>
                                </li>
                                <li><a href="product-default.html">Fullwidth</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Types<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="product-default.html">Simple</a>
                                </li>
                                <li><a href="product-default.html">Color Swatches</a>
                                </li>
                                <li><a href="product-image-swatches.html">Images Swatches</a>
                                </li>
                                <li><a href="product-countdown.html">Countdown</a>
                                </li>
                                <li><a href="product-multi-vendor.html">Multi-Vendor</a>
                                </li>
                                <li><a href="product-instagram.html">Instagram</a>
                                </li>
                                <li><a href="product-affiliate.html">Affiliate</a>
                                </li>
                                <li><a href="product-on-sale.html">On sale</a>
                                </li>
                                <li><a href="product-video.html">Video Featured</a>
                                </li>
                                <li><a href="product-groupped.html">Grouped</a>
                                </li>
                                <li><a href="product-out-stock.html">Out Of Stock</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Woo Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="shopping-cart.html">Shopping Cart</a>
                                </li>
                                <li><a href="checkout.html">Checkout</a>
                                </li>
                                <li><a href="whishlist.html">Whishlist</a>
                                </li>
                                <li><a href="compare.html">Compare</a>
                                </li>
                                <li><a href="order-tracking.html">Order Tracking</a>
                                </li>
                                <li><a href="my-account.html">My Account</a>
                                </li>
                                <li><a href="checkout-2.html">Checkout 2</a>
                                </li>
                                <li><a href="shipping.html">Shipping</a>
                                </li>
                                <li><a href="payment.html">Payment</a>
                                </li>
                                <li><a href="payment-success.html">Payment Success</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Basic Page<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="about-us.html">About Us</a>
                                </li>
                                <li><a href="contact-us.html">Contact</a>
                                </li>
                                <li><a href="faqs.html">Faqs</a>
                                </li>
                                <li><a href="comming-soon.html">Comming Soon</a>
                                </li>
                                <li><a href="404-page.html">404 Page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="become-a-vendor.html">Become a Vendor</a>
                                </li>
                                <li><a href="vendor-store.html">Vendor Store</a>
                                </li>
                                <li><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                </li>
                                <li><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                </li>
                                <li><a href="store-list.html">Store List</a>
                                </li>
                                <li><a href="store-list.html">Store List 2</a>
                                </li>
                                <li><a href="store-detail.html">Store Detail</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Account Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="user-information.html">User Information</a>
                                </li>
                                <li><a href="addresses.html">Addresses</a>
                                </li>
                                <li><a href="invoices.html">Invoices</a>
                                </li>
                                <li><a href="invoice-detail.html">Invoice Detail</a>
                                </li>
                                <li><a href="notifications.html">Notifications</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Blog Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="blog-grid.html">Grid</a>
                                </li>
                                <li><a href="blog-list.html">Listing</a>
                                </li>
                                <li><a href="blog-small-thumb.html">Small Thumb</a>
                                </li>
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                                </li>
                                <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Single Blog<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="blog-detail.html">Single 1</a>
                                </li>
                                <li><a href="blog-detail-2.html">Single 2</a>
                                </li>
                                <li><a href="blog-detail-3.html">Single 3</a>
                                </li>
                                <li><a href="blog-detail-4.html">Single 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="ps-page--single ps-page--vendor">
        <section class="ps-store-list">
            <div class="container">
                <aside class="ps-block--store-banner">
                    <div class="ps-block__content bg--cover" data-background="{{asset('img')}}/default_banner.jpg" style="background: url(http://127.0.0.1:8000/img/default_banner.jpg)">
                        <h3>Go Pro</h3><a class="ps-block__inquiry" href="#"><i class="fa fa-question"></i> Inquiry</a>
                    </div>
                    <div class="ps-block__user" style="background: #fef5ef;">
                        <div class="ps-block__user-avatar"><img src="{{asset('img')}}/profile/2.jpg" alt="">
                            <select class="ps-rating" data-read-only="true">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="2">5</option>
                            </select>
                        </div>
                        <div class="ps-block__user-content">
                            <p style="color: black;"><i class="icon-map-marker" style="color: black;"></i> 326 Orchard Str, Riau, Riau Indonesia</p>
                            <p style="color: black;"><i class="icon-envelope" style="color: black;"></i> <a href="http://nouthemes.net/cdn-cgi/l/email-protection" class="_cf_email_" data-cfemail="97f0f8e7e5f8d7f0faf6fefbb9f4f8fa">[email&#160;protected]</a></p>
                        </div>
                    </div>
                </aside>
                <div class="ps-section__wrapper">
                    <div class="ps-section__left" style="background: #24262B;">
                        <aside class="widget widget--vendor">
                            <h3 class="widget-title" style="color: white;">Product Search</h3>
                            <div class="form-group--icon">
                                <input class="form-control" type="text" placeholder="Search..."><i class="icon-magnifier"></i>
                            </div>
                        </aside>
                        <aside class="widget widget--vendor">
                            <h3 class="widget-title" style="color: white;">Store Categories</h3>
                            <ul class="ps-list--arrow">
                                <li><a href="#" style="color: white;">Interior</a></li>
                                <li><a href="#" style="color: white;">Lighting</a></li>
                                <li class="menu-item-has-children"><a href="#" style="color: white;">Exterior</a>
                                    <ul class="sub-menu ps-list--arrow">
                                        <li><a href="#"> Custom Grilles</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#" style="color: white;">Wheels & Tires</a>
                                    <ul class="sub-menu ps-list--categories">
                                        <li><a href="#"> Custom Grilles</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" style="color: white;">Factory Wheels</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget--vendor widget--open-time">
                            <h3 class="widget-title text-white"><i class="icon-clock3" style="color: white;"></i> Store Hours</h3>
                            <ul>
                                <li><strong class="text-white">Monday:</strong><span style="color: wheat;">8:00 am - 6:00 pm</span></li>
                                <li><strong class="text-white">Monday:</strong><span style="color: wheat;">8:00 am - 6:00 pm</span></li>
                                <li><strong class="text-white">Monday:</strong><span style="color: wheat;">8:00 am - 6:00 pm</span></li>
                                <li><strong class="text-white">Monday:</strong><span style="color: wheat;">8:00 am - 6:00 pm</span></li>
                                <li><strong class="text-white">Monday:</strong><span style="color: wheat;">8:00 am - 6:00 pm</span></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="ps-section__right">
                        <div class="ps-shopping ps-tab-root">
                            <div class="ps-shopping__header" style="background: #24262B;">
                                <p class="text-white"><strong class="text-white"> 6</strong> Products found</p>
                                <div class="ps-shopping__actions">
                                    <div class="ps-shopping__view">
                                        <p class="text-white">View</p>
                                        <ul class="ps-tab-list">
                                            <li class="active"><a href="#tab-1"><i class="icon-grid text-white"></i></a></li>
                                            <li><a href="#tab-2"><i class="icon-list4 text-white"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-1">
                                    <div class="ps-shopping-product">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('img')}}/1.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="ps-product_container"><a class="ps-product_vendor" href="#"></a>
                                                        <div class="ps-product_content"><a class="ps-product_title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>02</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$990.99 <del>$1050.50 </del></p>
                                                        </div>
                                                        <div class="ps-product_content hover"><a class="ps-product_title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                                            <p class="ps-product__price sale">$990.99 <del>$1050.50 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('img')}}/2.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="ps-product_container"><a class="ps-product_vendor" href="#">ROBERT’S STORE</a>
                                                        <div class="ps-product_content"><a class="ps-product_title" href="product-default.html">Evolution Sport Drilled and Slotted Brake Kit</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span></span>
                                                            </div>
                                                            <p class="ps-product__price sale">$45.99 <del>$50.50 </del></p>
                                                        </div>
                                                        <div class="ps-product_content hover"><a class="ps-product_title" href="product-default.html">Evolution Sport Drilled and Slotted Brake Kit</a>
                                                            <p class="ps-product__price sale">$45.99 <del>$50.50 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('img')}}/3.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="ps-product_container"><a class="ps-product_vendor" href="#">Young Shop</a>
                                                        <div class="ps-product_content"><a class="ps-product_title" href="product-default.html">Depo Black Housing Tail Lights Frs Brz 86</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span></span>
                                                            </div>
                                                            <p class="ps-product__price sale">$100.99 <del>$120.50 </del></p>
                                                        </div>
                                                        <div class="ps-product_content hover"><a class="ps-product_title" href="product-default.html">Depo Black Housing Tail Lights Frs Brz 86</a>
                                                            <p class="ps-product__price sale">$100.99 <del>$120.50 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('img')}}/4.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="ps-product_container"><a class="ps-product_vendor" href="#">Go Pro</a>
                                                        <div class="ps-product_content"><a class="ps-product_title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$442.99 - $560.00</p>
                                                        </div>
                                                        <div class="ps-product_content hover"><a class="ps-product_title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                                            <p class="ps-product__price">$442.99 - $560.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('img')}}/5.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="ps-product_container"><a class="ps-product_vendor" href="#">Go Pro</a>
                                                        <div class="ps-product_content"><a class="ps-product_title" href="product-default.html">Simpson Polymer White Racing Helmet</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$625.99 <del>$770.50 </del></p>
                                                        </div>
                                                        <div class="ps-product_content hover"><a class="ps-product_title" href="product-default.html">Simpson Polymer White Racing Helmet</a>
                                                            <p class="ps-product__price sale">$625.99 <del>$770.50 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('img')}}/6.jpg" alt="" /></a>
                                                        <div class="ps-product__badge hot">hot</div>
                                                    </div>
                                                    <div class="ps-product_container"><a class="ps-product_vendor" href="#">Global Office</a>
                                                        <div class="ps-product_content"><a class="ps-product_title" href="product-default.html">Gibson – Double Skull Exhaust System</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$1055.99</p>
                                                        </div>
                                                        <div class="ps-product_content hover"><a class="ps-product_title" href="product-default.html">Gibson – Double Skull Exhaust System</a>
                                                            <p class="ps-product__price">$1055.99</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-pagination">
                                        <ul class="pagination">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ps-tab" id="tab-2">
                                    <div class="ps-shopping-product">
                                        <div class="ps-product ps-product--wide">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home-2/recommend/1.jpg" alt="" /></a>
                                            </div>
                                            <div class="ps-product__container">
                                                <div class="ps-product_content"><a class="ps-product_title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>02</span>
                                                    </div>
                                                    <p class="ps-product__vendor">Sold by:<a href="#"></a></p>
                                                    <ul class="ps-product__desc">
                                                        <li> Unrestrained and portable active stereo speaker</li>
                                                        <li> Free from the confines of wires and chords</li>
                                                        <li> 20 hours of portable capabilities</li>
                                                        <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                        <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__shopping">
                                                    <p class="ps-product__price sale">$990.99 <del>$1050.50 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                        <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ps-product ps-product--wide">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home-2/recommend/2.jpg" alt="" /></a>
                                            </div>
                                            <div class="ps-product__container">
                                                <div class="ps-product_content"><a class="ps-product_title" href="product-default.html">Evolution Sport Drilled and Slotted Brake Kit</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span></span>
                                                    </div>
                                                    <p class="ps-product__vendor">Sold by:<a href="#">ROBERT’S STORE</a></p>
                                                    <ul class="ps-product__desc">
                                                        <li> Unrestrained and portable active stereo speaker</li>
                                                        <li> Free from the confines of wires and chords</li>
                                                        <li> 20 hours of portable capabilities</li>
                                                        <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                        <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__shopping">
                                                    <p class="ps-product__price sale">$45.99 <del>$50.50 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                        <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ps-product ps-product--wide">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home-2/recommend/3.jpg" alt="" /></a>
                                            </div>
                                            <div class="ps-product__container">
                                                <div class="ps-product_content"><a class="ps-product_title" href="product-default.html">Depo Black Housing Tail Lights Frs Brz 86</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span></span>
                                                    </div>
                                                    <p class="ps-product__vendor">Sold by:<a href="#">Young Shop</a></p>
                                                    <ul class="ps-product__desc">
                                                        <li> Unrestrained and portable active stereo speaker</li>
                                                        <li> Free from the confines of wires and chords</li>
                                                        <li> 20 hours of portable capabilities</li>
                                                        <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                        <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__shopping">
                                                    <p class="ps-product__price sale">$100.99 <del>$120.50 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                        <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ps-product ps-product--wide">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home-2/recommend/4.jpg" alt="" /></a>
                                            </div>
                                            <div class="ps-product__container">
                                                <div class="ps-product_content"><a class="ps-product_title" href="product-default.html">Anderson Composites – Custom Hood</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>01</span>
                                                    </div>
                                                    <p class="ps-product__vendor">Sold by:<a href="#">Go Pro</a></p>
                                                    <ul class="ps-product__desc">
                                                        <li> Unrestrained and portable active stereo speaker</li>
                                                        <li> Free from the confines of wires and chords</li>
                                                        <li> 20 hours of portable capabilities</li>
                                                        <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                        <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__shopping">
                                                    <p class="ps-product__price">$442.99 - $560.00</p><a class="ps-btn" href="#">Add to cart</a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                        <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ps-product ps-product--wide">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home-2/recommend/5.jpg" alt="" /></a>
                                            </div>
                                            <div class="ps-product__container">
                                                <div class="ps-product_content"><a class="ps-product_title" href="product-default.html">Simpson Polymer White Racing Helmet</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>01</span>
                                                    </div>
                                                    <p class="ps-product__vendor">Sold by:<a href="#">Go Pro</a></p>
                                                    <ul class="ps-product__desc">
                                                        <li> Unrestrained and portable active stereo speaker</li>
                                                        <li> Free from the confines of wires and chords</li>
                                                        <li> 20 hours of portable capabilities</li>
                                                        <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                        <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__shopping">
                                                    <p class="ps-product__price sale">$625.99 <del>$770.50 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                        <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ps-product ps-product--wide">
                                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home-2/recommend/6.jpg" alt="" /></a>
                                            </div>
                                            <div class="ps-product__container">
                                                <div class="ps-product_content"><a class="ps-product_title" href="product-default.html">Gibson – Double Skull Exhaust System</a>
                                                    <div class="ps-product__rating">
                                                        <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select><span>01</span>
                                                    </div>
                                                    <p class="ps-product__vendor">Sold by:<a href="#">Global Office</a></p>
                                                    <ul class="ps-product__desc">
                                                        <li> Unrestrained and portable active stereo speaker</li>
                                                        <li> Free from the confines of wires and chords</li>
                                                        <li> 20 hours of portable capabilities</li>
                                                        <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                        <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__shopping">
                                                    <p class="ps-product__price">$1055.99</p><a class="ps-btn" href="#">Add to cart</a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                        <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection