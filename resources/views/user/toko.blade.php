@extends('template.User')

@section('title', "Toko Sweet Home")

@section('content')

<!-- * Header -->

<div class="headerCarousel2">
    <img src="http://localhost:8080/uploads/toko/{{$toko['background']}}" class="w-100 img-fluid">
</div>

<!-- /Header -->

<div class="container">
    <div class="col-md-12">
        <div class="infoHeader">
            <div class="ProfileImgToko d-flex justify-content-center align-items-center">
                <img src="http://localhost:8080/uploads/toko/{{$toko['logo']}}" alt="" class="rounded-circle">
            </div>
            <div class="row mt-5 px-3">
                <h4>{{$toko['nama_toko']}}</h4>
                <span>{{$toko['deskripsi']}}</span>
            </div>
            <div class="row mt-3 px-3">
                <div class="col">
                    <a href="{{route("tambahProduk")}}" class="btn btn-success">Tambah produk</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <h3>Barang Di Toko</h3>
        <hr>
    </div>
    <div class="row">
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
                        <div class="lineSucces-Flash mb-3 mt-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection