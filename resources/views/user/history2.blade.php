@extends('template.User2')

@section('title', "My History | InfiniteMart")

@section('content')

<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button">
    <i class="fas fa-angle-up text-white" style="font-size: 25px;"></i>
</button>

<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Your History</h3>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Wishlist Section:::... -->
<div class="wishlist-section" style="margin-bottom: 5rem;">
    <!-- Start Cart Table -->
    <div class="wishlish-table-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="table_page table-responsive">
                            <table>
                                <!-- Start Wishlist Table Head -->
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_stock">Stock Status</th>
                                    </tr>
                                </thead> <!-- End Cart Table Head -->
                                <tbody>
                                    <!-- Start Wishlist Single Item-->
                                    <tr>
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb"><a href="product-details-default.html"><img
                                                    src="{{asset('img')}}/product/default/home-1/default-1.jpg"
                                                    alt=""></a></td>
                                        <td class="product_name"><a href="product-details-default.html">Handbag
                                                fringilla</a></td>
                                        <td class="product-price">$65.00</td>
                                        <td class="product_stock">In Stock</td>
                                    </tr> <!-- End Wishlist Single Item-->
                                    <!-- Start Wishlist Single Item-->
                                    <tr>
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb"><a href="product-details-default.html"><img
                                                    src="{{asset('img')}}/product/default/home-1/default-2.jpg"
                                                    alt=""></a></td>
                                        <td class="product_name"><a href="product-details-default.html">Handbags
                                                justo</a></td>
                                        <td class="product-price">$90.00</td>
                                        <td class="product_stock">In Stock</td>
                                    </tr> <!-- End Wishlist Single Item-->
                                    <!-- Start Wishlist Single Item-->
                                    <tr>
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb"><a href="product-details-default.html"><img
                                                    src="{{asset('img')}}/product/default/home-1/default-3.jpg"
                                                    alt=""></a></td>
                                        <td class="product_name"><a href="product-details-default.html">Handbag
                                                elit</a></td>
                                        <td class="product-price">$80.00</td>
                                        <td class="product_stock">In Stock</td>
                                    </tr> <!-- End Wishlist Single Item-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Cart Table -->
</div> <!-- ...:::: End Wishlist Section:::... -->

@endsection