@extends('template.User')

@section('title', "Home Sweet Home")

@section('content')

<!-- * Header -->

<div class="container d-flex flex-column mt-5">
    <div class="headerCarousel">

    </div>
    <div class="slideIconCarousel mb-2 mt-3 d-flex"></div>
</div>

<!-- /Header -->


<!-- * Produk -->

<div class="container mt-5">

    <div class="row">

        <div class="col-md-3">
            <div class="sellerCard-Barang mb-4">
                <div class="topImg-seller d-flex justify-content-center">
                    <img src="{{asset("img/Produk/gelasPink.png")}}" alt="">
                </div>
                <div class="container d-flex justify-content-between">

                    <div class="contentCard-Barang d-flex flex-column mt-2">
                        <h5 class="fw-bold">Gelas Pink</h5>
                        <span style="color: gold;">Rp. 45.000</span>
                        <div class="setDiskon-Flash">
                            <span>Rp. 55.000</span>
                            <span class="fw-bold text-danger">18% OFF</span>
                        </div>
                        <div class="lineSucces-Flash"></div>
                        <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                    </div>
                    <div class="contentCard-Barang d-flex flex-column justify-content-center">
                        <img src="{{asset("img/Home/ikon-bintang.png")}}" )}}" alt="">
                        <img class="mt-2" src="{{asset("img/Home/ikon-tambah.png")}}" )}}" style="cursor: pointer;">
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="sellerCard-Barang mb-4">
                <div class="topImg-seller d-flex justify-content-center">
                    <img src="{{asset("img/Produk/jamItem.png")}}" alt="">
                </div>
                <div class="container d-flex justify-content-between">

                    <div class="contentCard-Barang d-flex flex-column mt-2">
                        <h5 class="fw-bold">Jam Tangan</h5>
                        <span style="color: gold;">Rp. 172.000</span>
                        <div class="setDiskon-Flash">
                            <span>Rp. 210.000</span>
                            <span class="fw-bold text-danger">18% OFF</span>
                        </div>
                        <div class="lineSucces-Flash"></div>
                        <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                    </div>
                    <div class="contentCard-Barang d-flex flex-column justify-content-center">
                        <img src="{{asset("img/Home/ikon-bintang.png")}}" )}}" alt="">
                        <img class="mt-2" src="{{asset("img/Home/ikon-tambah.png")}}" )}}" style="cursor: pointer;">
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="sellerCard-Barang mb-4">
                <div class="topImg-seller d-flex justify-content-center">
                    <img src="{{asset("img/Produk/gelasPink.png")}}" alt="">
                </div>
                <div class="container d-flex justify-content-between">

                    <div class="contentCard-Barang d-flex flex-column mt-2">
                        <h5 class="fw-bold">Gelas Pink</h5>
                        <span style="color: gold;">Rp. 55.000</span>
                        <div class="setDiskon-Flash">
                            <span>Rp. 55.000</span>
                            <span class="fw-bold text-danger">18% OFF</span>
                        </div>
                        <div class="lineSucces-Flash"></div>
                        <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                    </div>
                    <div class="contentCard-Barang d-flex flex-column justify-content-center">
                        <img src="{{asset("img/Home/ikon-bintang.png")}}" alt="">
                        <img class="mt-2" src="{{asset("img/Home/ikon-tambah.png")}}" style="cursor: pointer;">
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="sellerCard-Barang mb-4">
                <div class="topImg-seller d-flex justify-content-center">
                    <img src="{{asset("img/Produk/kursi.png")}}" alt="">
                </div>
                <div class="container d-flex justify-content-between">

                    <div class="contentCard-Barang d-flex flex-column mt-2">
                        <h5 class="fw-bold">Kursi</h5>
                        <span style="color: gold;">Rp. 63.000</span>
                        <div class="setDiskon-Flash">
                            <span>Rp. 77.000</span>
                            <span class="fw-bold text-danger">18% OFF</span>
                        </div>
                        <div class="lineSucces-Flash"></div>
                        <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                    </div>
                    <div class="contentCard-Barang d-flex flex-column justify-content-center">
                        <img src="{{asset("img/Home/ikon-bintang.png")}}" alt="">
                        <img class="mt-2" src="{{asset("img/Home/ikon-tambah.png")}}" style="cursor: pointer;">
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="sellerCard-Barang mb-4">
                <div class="topImg-seller d-flex justify-content-center">
                    <img src="{{asset("img/Produk/gelasPink.png")}}" alt="">
                </div>
                <div class="container d-flex justify-content-between">

                    <div class="contentCard-Barang d-flex flex-column mt-2">
                        <h5 class="fw-bold">Gelas Pink</h5>
                        <span style="color: gold;">Rp. 45.000</span>
                        <div class="setDiskon-Flash">
                            <span>Rp. 55.000</span>
                            <span class="fw-bold text-danger">18% OFF</span>
                        </div>
                        <div class="lineSucces-Flash"></div>
                        <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                    </div>
                    <div class="contentCard-Barang d-flex flex-column justify-content-center">
                        <img src="{{asset("img/Home/ikon-bintang.png")}}" alt="">
                        <img class="mt-2" src="{{asset("img/Home/ikon-tambah.png")}}" style="cursor: pointer;">
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="sellerCard-Barang mb-4">
                <div class="topImg-seller d-flex justify-content-center">
                    <img src="{{asset("img/Produk/jamItem.png")}}" alt="">
                </div>
                <div class="container d-flex justify-content-between">

                    <div class="contentCard-Barang d-flex flex-column mt-2">
                        <h5 class="fw-bold">Jam Tangan</h5>
                        <span style="color: gold;">Rp. 172.000</span>
                        <div class="setDiskon-Flash">
                            <span>Rp. 210.000</span>
                            <span class="fw-bold text-danger">18% OFF</span>
                        </div>
                        <div class="lineSucces-Flash"></div>
                        <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                    </div>
                    <div class="contentCard-Barang d-flex flex-column justify-content-center">
                        <img src="{{asset("img/Home/ikon-bintang.png")}}" alt="">
                        <img class="mt-2" src="{{asset("img/Home/ikon-tambah.png")}}" style="cursor: pointer;">
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="sellerCard-Barang mb-4">
                <div class="topImg-seller d-flex justify-content-center">
                    <img src="{{asset("img/Produk/gelasPink.png")}}" alt="">
                </div>
                <div class="container d-flex justify-content-between">

                    <div class="contentCard-Barang d-flex flex-column mt-2">
                        <h5 class="fw-bold">Gelas Pink</h5>
                        <span style="color: gold;">Rp. 55.000</span>
                        <div class="setDiskon-Flash">
                            <span>Rp. 55.000</span>
                            <span class="fw-bold text-danger">18% OFF</span>
                        </div>
                        <div class="lineSucces-Flash"></div>
                        <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                    </div>
                    <div class="contentCard-Barang d-flex flex-column justify-content-center">
                        <img src="{{asset("img/Home/ikon-bintang.png")}}" alt="">
                        <img class="mt-2" src="{{asset("img/Home/ikon-tambah.png")}}" style="cursor: pointer;">
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="sellerCard-Barang mb-4">
                <div class="topImg-seller d-flex justify-content-center">
                    <img src="{{asset("img/Produk/kursi.png")}}" alt="">
                </div>
                <div class="container d-flex justify-content-between">

                    <div class="contentCard-Barang d-flex flex-column mt-2">
                        <h5 class="fw-bold">Kursi</h5>
                        <span style="color: gold;">Rp. 63.000</span>
                        <div class="setDiskon-Flash">
                            <span>Rp. 77.000</span>
                            <span class="fw-bold text-danger">18% OFF</span>
                        </div>
                        <div class="lineSucces-Flash"></div>
                        <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                    </div>
                    <div class="contentCard-Barang d-flex flex-column justify-content-center">
                        <img src="{{asset("img/Home/ikon-bintang.png")}}" alt="">
                        <img class="mt-2" src="{{asset("img/Home/ikon-tambah.png")}}" style="cursor: pointer;">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="btnSelengkapnya d-flex justify-content-center mt-5 ">
        <button type="submit" class="btn btn-Selengkapnya text-white mb-3">Selengkapnya <img
                src="{{asset("img/Home/Vector 1.png")}}" alt=""></button>
    </div>
</div>

<!-- /produk -->

@endsection