@extends('template.User')

@section('title', "Detail Sweet Home")

@section('content')

<!-- Content -->
<div class="container mt-5">
    <div class="row d-none">
        <span id="idProduk" data-idproduk="{{$idProduk}}"></span>
    </div>
    <div class="row">
        <div class="col-md-8">

            <div class="cardDetail-sideLeft">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="DetailImg-Barang d-flex justify-content-center">
                                {{-- <img src="http://localhost:8080/uploads/produk/{{$produk[0]["gambar"]}}"
                                class="img-fluid" id="img-produk"> --}}
                                <img class="img-fluid" id="img-produk">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                {{-- <img src="http://localhost:8080/uploads/produk/{{$produk[0]["gambar_lain"]}}"
                                class="w-100" id="img-produk-lainnya"> --}}
                                <img class="w-100" id="img-produk-lainnya">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="DetailPenjelasan-Barang">
                            <div class="container">
                                <div class="headerDetail-Penjelasan my-3">
                                    <h3 class="fw-bold" id="produkName">
                                        {{-- {{$produk[0]["nama_produk"]}} --}}
                                    </h3>
                                </div>
                                <div class="infoHarga mt-2">
                                    {{-- <h4 class="stuff-fare text-danger fw-bold mb-3" data-fare="{{$produk[0]["harga"]}}">
                                    {{$produk[0]["harga"]}}</h4> --}}
                                    <h4 class="text-danger fw-bold mb-3" id="produkFare"></h4>
                                    <div class="d-flex flex-column">
                                        {{-- <div class="overText d-flex">
                                            <p>Rp 59.000</p>
                                        </div> --}}
                                        <div class="underText">
                                            <p>Stok Tersedia</p>
                                        </div>
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
                                    {{-- <button class="btn btn-payment"><img class="img-keranjang"
                                            src="../Assets/img/DetailProduk/trolley.png" alt=""> Masukan
                                        Keranjang</button> --}}
                                    <button class="btn btn-payment">Beli Sekarang</button>
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
                                    {{-- <img class="img-fluid rounded-circle mb-3"
                                        src="http://localhost:8080/uploads/toko/{{$toko[0]["logo"]}}" alt=""> --}}

                                    <img class="img-fluid rounded-circle mb-3" id="logoToko" alt="">
                                </div>
                                <div class="contentToko d-flex justify-content-center">
                                    {{-- <a href="{{url("toko/".$toko[0]['id_toko'])}}"
                                    class="text-center">{{$toko[0]["nama_toko"]}}</a> --}}
                                    <a class="text-center" id="tokoName"></a>
                                </div>
                                <div class="locationToko d-flex flex-column mt-3">
                                    <span class="text-center">
                                        <i class="fas fa-map-marker-alt"
                                            style="margin-left: 1.2%; margin-right: 2%;"></i>
                                        Downtown, Los Angeles
                                    </span>
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
        <h3>Barang Lainnya</h3>
        <hr>
    </div>

    <div class="row" id="produkPlace">

        {{-- @if (count($produkAll) > 0)
        @foreach ($produkAll as $item)

        <div class="col-md-3">
            <a href="{{url("/detail/" . $item['id_produk'])}}" style="text-decoration: none;color:inherit;">
        <div class="sellerCard-Barang mb-4">
            <div class="topImg-seller d-flex justify-content-center">
                <img src="http://localhost:8080/uploads/produk/{{$item["gambar"]}}" alt="" height="250px">
            </div>
            <div class="container d-flex justify-content-between">

                <div class="contentCard-Barang d-flex flex-column mt-3">
                    <h5 class="fw-bold">{{$item["nama_produk"]}}</h5>
                    <span style="color: gold;" class="stuff-fare" data-fare="{{$item["harga"]}}">Rp.
                        {{$item["harga"]}}</span>
                    <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                </div>

            </div>
        </div>
        </a>
    </div>

    @endforeach
    @endif --}}

</div>
</div>

<!-- /Content -->

@endsection