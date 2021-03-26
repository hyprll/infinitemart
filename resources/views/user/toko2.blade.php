@extends('template.User2')

@section('title', "Toko | InfiniteMart")

@section('content')

<div id="tokoSectionReadOnly" data-toko="{{$idToko}}"></div>

<div class="ps-page--single ps-page--vendor">
    <section class="ps-store-list">
        <div class="container">
            <aside class="ps-block--store-banner" data-aos="fade-up" data-aos-delay="0">
                <div class="ps-block__content bg--cover" data-background="{{asset('img')}}/default_banner.jpg"
                    style="background: " id="bgToko">
                </div>
                <div class="ps-block__user" style="background: #fef5ef;" id="toko-content">
                    <div class="ps-block__user-avatar">
                        <img src="" alt="" style="width: 200px;height:200px" id="logoToko">
                    </div>
                    <div class="ps-block__user-content non-update">
                        <h3 class="fw-bold" id="namaToko"></h3>
                        <p class="text-secondary" id="deskripsiToko"></p>
                    </div>
                </div>
                <div class="ps-block__user" style="background: #fef5ef" id="mystore-content"></div>
            </aside>
        </div>
    </section>
</div>

<!-- ...:::: Start Shop Section:::... -->
<div class="shop-section" style="margin: 5rem 0">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-12">
                <!-- Start Shop Product Sorting Section -->
                <div class="shop-sort-section">
                    <div class="container">
                        <div class="row" style="max-width: 90vw">
                            <!-- Start Sort Wrapper Box -->
                            <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                data-aos="fade-up" data-aos-delay="0">
                                <!-- Start Sort tab Button -->
                                <div class="sort-tablist d-flex align-items-center">
                                    <ul class="tablist nav sort-tab-btn">
                                        <li><a class="nav-link active" data-bs-toggle="tab" href="#layout-4-grid"><img
                                                    src="{{asset('img')}}/icons/bkg_grid.png" alt=""></a>
                                        </li>
                                        <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                    src="{{asset('img')}}/icons/bkg_list.png" alt=""></a>
                                        </li>
                                    </ul>

                                    <!-- Start Page Amount -->
                                    <div class="page-amount ml-2">
                                        <span>Store Product</span>
                                    </div> <!-- End Page Amount -->
                                </div> <!-- End Sort tab Button -->

                                <!-- Start Sort Select Option -->
                                <div class="sort-select-list d-flex align-items-center">

                                </div> <!-- End Sort Select Option -->



                            </div> <!-- Start Sort Wrapper Box -->
                        </div>
                    </div>
                </div> <!-- End Section Content -->

                <!-- Start Tab Wrapper -->
                <div class="sort-product-tab-wrapper">
                    <div class="container">
                        <div class="row pr-4" data-aos="fade-up" data-aos-delay="0" style="max-width: 98vw" id="produkToko">
                            <div class="col-12">
                                <div class="tab-content">
                                    <!-- Start Grid View Product -->
                                    <div class="tab-pane active show sort-layout-single" id="layout-4-grid">
                                        <div class="row" id="productStore"> </div>
                                    </div> <!-- End Grid View Product -->
                                    <!-- Start List View Product -->
                                    <div class="tab-pane sort-layout-single" id="layout-list">
                                        <div class="row" id="productStore2"></div>
                                    </div> <!-- End List View Product -->
                                </div>
                            </div>
                        </div>
                        <div class="row pr-4 mt-3" data-aos="fade-up" data-aos-delay="0" style="max-width: 98vw" id="historyToko">
                            <div class="col-12">
                                <h4>Store History</h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_remove">No</th>
                                                <th class="product_thumb">Image</th>
                                                <th class="product_name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product_stock">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id="history-store"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Tab Wrapper -->

            </div> <!-- End Shop Product Sorting Section  -->
        </div>
    </div>
</div> <!-- ...:::: End Shop Section:::... -->

@endsection