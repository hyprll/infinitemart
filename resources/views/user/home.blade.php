@extends('template.User')

@section('title', "Home | InfiniteMart")

@section('content')

<div class="root">

    <!-- * Header -->

    <div class="container mt-5">
        <div class="row">
            <div class="headerCarousel2 owl-carousel">
                <img src="{{asset("/img/header/banner1.jpg")}}" alt="" class="" style="height: 450px;width:100%;">
                <img src="{{asset("/img/header/banner2.png")}}" alt="" class="" style="height: 450px;width:100%;">
                <img src="{{asset("/img/header/banner3.png")}}" alt="" class="" style="height: 450px;width:100%;">
            </div>
        </div>
    </div>

    <!-- /Header -->


    <!-- * Produk -->

    <div class="container mt-5">

        <div class="row">
            <h3>Rekomendasi Untuk Kamu</h3>
            <hr>
        </div>

        <div class="row" id="produkPlace"></div>
        <div class="btnSelengkapnya d-flex justify-content-center mt-5 ">
            <button type="submit" class="btn btn-Selengkapnya text-white mb-3">Selengkapnya <img
                    src="{{asset("img/Home/Vector 1.png")}}" alt=""></button>
        </div>
    </div>
    <!-- /produk -->


</div>

@endsection