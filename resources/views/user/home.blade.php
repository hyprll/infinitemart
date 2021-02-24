@extends('template.User')

@section('title', "Home Sweet Home")

@section('content')

<!-- * Header -->

<div class="container mt-5">
    <div class="row headerCarousel2 owl-carousel">
        <img src="{{asset("/img/header/banner1.jpg")}}" alt="" class="carausel-img">
        <img src="{{asset("/img/header/banner2.png")}}" alt="" class="carausel-img">
        <img src="{{asset("/img/header/banner3.png")}}" alt="" class="carausel-img">
    </div>
    {{-- <div class="headerCarousel owl-carousel">
        <div class="carausel-img">
            Lorem ipsum dolor sit
        </div>
    </div> --}}
</div>

<!-- /Header -->


<!-- * Produk -->

<div class="container mt-5">

    <div class="row">
        <h3>Rekomendasi Untuk Kamu</h3>
        <hr>
    </div>

    <div class="row" id="produkPlace">

        {{-- @if (count($produk) > 0)
        @foreach ($produk as $item)

        <div class="col-md-3">
            <a href="{{url("/detail/" . $item['id_produk'])}}" style="text-decoration: none;color:inherit;">
                <div class="sellerCard-Barang mb-4">
                    <div class="topImg-seller d-flex justify-content-center">
                        <img src="http://localhost:8080/uploads/produk/{{$item["gambar"]}}" alt="InfiniteMart {{$item["nama_produk"]}}" height="250px" class="user-select-none">
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
    <div class="btnSelengkapnya d-flex justify-content-center mt-5 ">
        <button type="submit" class="btn btn-Selengkapnya text-white mb-3">Selengkapnya <img
                src="{{asset("img/Home/Vector 1.png")}}" alt=""></button>
    </div>
</div>

<!-- /produk -->

@endsection