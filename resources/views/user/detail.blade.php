@extends('template.User')

@section('title', "Detail Sweet Home")

@section('content')

<!-- Content -->

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">

            <div class="cardDetail-sideLeft">
                <div class="row">
                    <div class="col-md-5">
                        <div class="DetailImg-Barang d-flex justify-content-center">
                            <img src="{{asset("img/Produk/kursi_biru.png")}}">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="DetailPenjelasan-Barang">
                            <div class="container">
                                <button class="btn btn-Gradient">Flash Sale</button>
                                <div class="headerDetail-Penjelasan my-3">
                                    <h3 class="fw-bold">Kursi Biru</h3>
                                </div>
                                <div class="d-flex PenilaianStar">
                                    <div class="starGold d-flex">
                                        <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                        <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                        <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                        <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                        <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                    </div>
                                    <p>700 Penilaian</p>
                                    <p>700 Penjualan</p>
                                </div>
                                <div class="infoHarga mt-2">
                                    <h4 class="text-danger fw-bold">Rp. 50.000</h4>
                                    <div class="d-flex flex-column">
                                        <div class="overText d-flex">
                                            <p>Rp 59.000</p>
                                            <p class="text-danger fw-bold">18% OFF</p>
                                        </div>
                                        <div class="underText">
                                            <p>Stok Tersedia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="setColor d-flex justify-content-between align-items-center">
                                    <div>
                                        <span>Warna</span>
                                    </div>
                                    <div class="d-flex">
                                        <span>Biru Muda Hitam</span>
                                    </div>
                                </div>
                                <div class="setKuantitas d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="mt-1">Kuantitas</span>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <input type="number" class="form-control form-control-sm w-50" value="1">
                                    </div>
                                </div>
                                <div class="btnPayment mt-3 d-flex justify-content-between">
                                    <button class="btn btn-payment"><img class="img-keranjang"
                                            src="../Assets/img/DetailProduk/trolley.png" alt=""> Masukan
                                        Keranjang</button>
                                    <button class="btn btn-payment">Beli Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="SpekProduk mt-4">
                <div class="row">

                    <div class="col-md-12">
                        <div class="cardSpesifikasiProduk">
                            <div class="container">
                                <div class="headerSpesifikasi">
                                    <h3>Spesifikasi Produk</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 position-relative leftSpesifikasi">
                                        <div class="infoLanjutSpesifikasi mt-3 d-flex justify-content-between">
                                            <span>Kategori</span>
                                            <span>Prabot Rumah Tangga</span>
                                        </div>
                                        <div class="infoLanjutSpesifikasi mt-3 d-flex justify-content-between">
                                            <span>Merk</span>
                                            <span>LÅNGFJÄLL</span>
                                        </div>
                                        <div class="infoLanjutSpesifikasi mt-3 d-flex justify-content-between">
                                            <span>Ukuran</span>
                                            <span>20 Cm X 30 Cm X 10 Cm</span>
                                        </div>
                                        <div class="infoLanjutSpesifikasi mt-3 d-flex justify-content-between">
                                            <span>Bahan</span>
                                            <span>Polyester, Spandex</span>
                                        </div>
                                        <div class="infoLanjutSpesifikasi mt-3 d-flex justify-content-between">
                                            <span>Stok</span>
                                            <span>500</span>
                                        </div>
                                        <div class="lineVerical"></div>
                                    </div>
                                    <div class="col-md-5 rightSpesifikasi">
                                        <h5 class="fw-bold mt-3">Fitur Utama</h5>
                                        <p class="contentSpesifikasi">
                                            Garis melengkung mulus yang
                                            ditonjolkan dengan detail jahit
                                            cocok untuk tubuh Anda dan
                                            nyaman.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="cardPenilaianProduk mt-4">
                            <div class="container">
                                <div class="headerSpesifikasi">
                                    <h3 class="fw-bold">Penilaian Produk</h3>
                                </div>
                                <div class="d-flex PenilaianStar mb-5">
                                    <div class="starGold d-flex">
                                        <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                        <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                        <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                        <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                        <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                    </div>
                                    <p>700 Penilaian</p>
                                    <p>700 Penjualan</p>
                                </div>
                                <div class="row">

                                    <div class="chatUser">
                                        <div class="row">
                                            <div class="col-md-2 d-flex justify-content-center">
                                                <img src="{{asset("img/DetailProduk/user3.svg")}}" alt=""
                                                    class="img-chat-user">
                                            </div>
                                            <div class="col-md-10 isiChat">
                                                <p class="card-title">Rizky Ramadhan</p>
                                                <div class="starGold d-flex">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                </div>
                                                <p class="card-title">Warna : Ada yang abu-abu gk mba biar kece nih
                                                    Barang Sampai dengan cepat,kualitas sangat memuaskan</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chatUser">
                                        <div class="row">
                                            <div class="col-md-2 d-flex justify-content-center">
                                                <img src="{{asset("img/DetailProduk/user5.svg")}}" alt=""
                                                    class="img-chat-user">
                                            </div>
                                            <div class="col-md-10 isiChat">
                                                <p class="card-title">Galang Rambu Anarki</p>
                                                <div class="starGold d-flex">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                </div>
                                                <p class="card-title">
                                                    Barangnya jellleeekkkkkk banggeetttt. tapi boong
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chatUser">
                                        <div class="row">
                                            <div class="col-md-2 d-flex justify-content-center">
                                                <img src="{{asset("img/DetailProduk/user6.svg")}}" alt=""
                                                    class="img-chat-user">
                                            </div>
                                            <div class="col-md-10 isiChat">
                                                <p class="card-title">Muhammad raqwan</p>
                                                <div class="starGold d-flex">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                </div>
                                                <p class="card-title">
                                                    Siapa yang cita-citanya pengen jadi titan
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chatUser">
                                        <div class="row">
                                            <div class="col-md-2 d-flex justify-content-center">
                                                <img src="{{asset("img/DetailProduk/user4.svg")}}" alt=""
                                                    class="img-chat-user">
                                            </div>
                                            <div class="col-md-10 isiChat">
                                                <p class="card-title">Ahmad Yoza</p>
                                                <div class="starGold d-flex">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                    <img src="{{asset("img/DetailProduk/Bintang.png")}}" alt="">
                                                </div>
                                                <p class="card-title">Bahan: Empuk banget nih kursinya Barang Oke
                                                    Mba, Cepet ngirimnya</p>
                                                <div class="d-flex justify-content-end">
                                                    <p class="card-title pointer text-primary btn">Tampilkan Semua
                                                    </p>
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

        </div>

        <div class="col-md-4">
            <div class="row">

                <div class="col-md-12">
                    <div class="cardDetail-sideRight">
                        <div class="cardToko ">
                            <div class="container d-flex flex-column">
                                <div class="imgTopToko d-flex justify-content-center">
                                    <img class="rounded-circle" src="{{asset("img/DetailProduk/User.png")}}" alt="">
                                </div>
                                <div class="contentToko d-flex justify-content-center">
                                    <span class="text-center">Pancaran Furniture</span>
                                </div>
                                <span class="text-center" style="color: #0DD409;">Online</span>
                                <div class="locationToko d-flex flex-column">
                                    <span><i class="fas fa-star"></i> 100/100</span>
                                    <span><i class="fas fa-map-marker-alt"
                                            style="margin-left: 1.2%; margin-right: 2%;"></i> Downtown, Los
                                        Angeles</span>
                                </div>
                                <div class="btnPenjual mt-2">
                                    <button class="btn btn-payment2">Chat</button>
                                    <button class="btn btn-payment">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="cardDetail-sideRight">
                        <div class="cardToko">
                            <div class="container d-flex flex-column">
                                <span class="text-center fw-bold">Metode Pengiriman</span>
                                <button class="btn btn-payPal mt-2"><i class="fas fa-map-marker-alt"
                                        style="margin-right: 5px;"></i>Cari Lokasi</button>
                                <button class="btn btn-payment mt-2 w-100" style="height: 10vh;">Pilih Lokasi Lalu
                                    Tentukan Metode Pengiriman</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="cardDetail-sideRight">
                        <div class="cardDetailStuff mt-4">
                            <div class="topImg-MoreStuff">
                                <img src="{{asset("img/Produk/jamItem.png")}}" alt="">
                            </div>
                            <div class="contentDetail-Stuff">
                                <div class="container">
                                    <div class="contentCard-Barang d-flex flex-column mt-2">
                                        <h5 class="fw-bold">Jam Hitam</h5>
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

                <div class="col-md-12">
                    <div class="cardDetail-sideRight">
                        <div class="cardDetailStuff mt-4">
                            <div class="topImg-MoreStuff">
                                <img src="{{asset("img/Produk/gelasPinkHorizontal.png")}}" alt="">
                            </div>
                            <div class="contentDetail-Stuff">
                                <div class="container">
                                    <div class="contentCard-Barang d-flex flex-column mt-2">
                                        <h5 class="fw-bold">Gelas Pink</h5>
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
    </div>
</div>

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
                        <img class="mt-2" src="{{asset("/img/Home/ikon-tambah.png")}}" style="cursor: pointer;">
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- /Content -->

@endsection