@extends('template/User')

@section('title', "Home Sweet Home")

@section('content')


<!-- * Header -->

<div class="container d-flex flex-column mt-5">
    <div class="headerCarousel">

    </div>
    <div class="slideIconCarousel mb-2 mt-3 d-flex"></div>
</div>

<!-- /Header -->

<!-- * Menu -->

<div class="container my-4">
    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-3">
                    <div class="cardInfoSale mt-3 d-flex justify-content-center align-items-center">
                        <span style="font-size: 15px;" class="fw-bold">Token Listrik</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardInfoSale mt-3 d-flex justify-content-center align-items-center">
                        <span style="font-size: 15px;" class="fw-bold">Prabot Rumah</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardInfoSale mt-3 d-flex justify-content-center align-items-center">
                        <span style="font-size: 15px;" class="fw-bold">Elektronika</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardInfoSale mt-3 d-flex justify-content-center align-items-center">
                        <span style="font-size: 15px;" class="fw-bold">Pakaian</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /menu -->

<!-- * Gift -->
<div class="container my-5">
    <div class="cardGift">
        <img src="{{asset("img/Home/kadoo.png")}}" alt="" class="user-select-none">
    </div>
</div>
<!-- /Gift -->

<!-- * Flash Sale -->
<div class="flashSale my-5">
    <div class="header-flashsale">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="text-white mt-2"><img src="{{asset("img/Home/Vector.png")}}" alt=""> Flash Sale
                    </h3>
                </div>
                <div class="col-md-6 d-flex align-items-center positionFlash-time">
                    <div class="timeHour-Flash rounded-circle d-flex justify-content-center align-items-center">
                        <span>06</span>
                    </div>
                    <span class="text-white">:</span>
                    <div class="timeMinute-Flash rounded-circle d-flex justify-content-center align-items-center">
                        <span>37</span>
                    </div>
                    <span class="text-white">:</span>
                    <div class="timeSecond-Flash rounded-circle d-flex justify-content-center align-items-center">
                        <span>18</span>
                    </div>
                </div>
                <div class="col-md-3 text-white all-produk-pos d-flex">
                    <span class="mx-3">Lihat Semua</span>
                    <img src="{{asset("img/Home/Vector 1.png")}}" alt="" width="20px" height="20px">
                </div>
            </div>
        </div>
    </div>
    <div class="body-flashsale">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="cardInfo-Barang mt-3">
                        <div class="topCard-Barang d-flex justify-content-center mt-3">
                            <img src="{{asset("img/Produk/kursi_biru.png")}}" alt="">
                        </div>
                        <div class="container">
                            <div class="contentCard-Barang d-flex flex-column mt-2">
                                <h5 class="fw-bold">Bangku Biru</h5>
                                <span style="color: gold;">Rp. 82.000</span>
                                <div class="setDiskon-Flash">
                                    <span>Rp. 100.000</span>
                                    <span class="fw-bold text-danger">18% OFF</span>
                                </div>
                                <div class="lineSucces-Flash"></div>
                                <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardInfo-Barang mt-3">
                        <div class="topCard-Barang d-flex justify-content-center mt-3">
                            <img src="{{asset("img/Produk/kursi_abu-abu.png")}}" alt="">
                        </div>
                        <div class="container">
                            <div class="contentCard-Barang d-flex flex-column mt-2">
                                <h5 class="fw-bold">Bangku Abu Abu</h5>
                                <span style="color: gold;">Rp. 123.000</span>
                                <div class="setDiskon-Flash">
                                    <span>Rp. 150.000</span>
                                    <span class="fw-bold text-danger">18% OFF</span>
                                </div>
                                <div class="lineSucces-Flash"></div>
                                <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardInfo-Barang mt-3">
                        <div class="topCard-Barang d-flex justify-content-center mt-3">
                            <img src="{{asset("img/Produk/kursi_biru.png")}}" alt="">
                        </div>
                        <div class="container">
                            <div class="contentCard-Barang d-flex flex-column mt-2">
                                <h5 class="fw-bold">Bangku Biru</h5>
                                <span style="color: gold;">Rp. 82.000</span>
                                <div class="setDiskon-Flash">
                                    <span>Rp. 100.000</span>
                                    <span class="fw-bold text-danger">18% OFF</span>
                                </div>
                                <div class="lineSucces-Flash"></div>
                                <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardInfo-Barang mt-3">
                        <div class="topCard-Barang d-flex justify-content-center mt-3">
                            <img src="{{asset("img/Produk/kursi_abu-abu.png")}}" alt="">
                        </div>
                        <div class="container">
                            <div class="contentCard-Barang d-flex flex-column mt-2">
                                <h5 class="fw-bold">Bangku Abu Abu</h5>
                                <span style="color: gold;">Rp. 123.000</span>
                                <div class="setDiskon-Flash">
                                    <span>Rp. 150.000</span>
                                    <span class="fw-bold text-danger">18% OFF</span>
                                </div>
                                <div class="lineSucces-Flash"></div>
                                <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- / Flash Sale -->

<!-- * What the F**k is this -->

<div class="container mt-5">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="cardFlex-Three mt-2 mb-2">

                </div>
            </div>
            <div class="col-md-4">
                <div class="cardFlex-Three mt-2 mb-2">

                </div>
            </div>
            <div class="col-md-4">
                <div class="cardFlex-Three mt-2 mb-2">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- / end wtf -->

<!-- * Also wtf -->
<div class="flashSale my-5">
    <div class="container py-4">
        <div class="row my-5">
            <div class="col-md-6">
                <div class="cardInfo-Location d-flex my-2">
                    <img src="{{asset("img/Home/maps.png")}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="cardInfo-Location d-flex my-2 justify-content-end">
                    <img src="{{asset("img/Home/perspaleta1 1.png")}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Also -->

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