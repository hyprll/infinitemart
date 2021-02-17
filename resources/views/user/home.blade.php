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

        @if (count($produk) > 0)
        @foreach ($produk as $item)

        <div class="col-md-3">
            <a href="{{url("/detail/" . $item['id_produk'])}}" style="text-decoration: none;color:inherit;">
                <div class="sellerCard-Barang mb-4">
                    <div class="topImg-seller d-flex justify-content-center">
                        <img src="http://localhost:8080/{{$item["gambar"]}}" alt="">
                    </div>
                    <div class="container d-flex justify-content-between">

                        <div class="contentCard-Barang d-flex flex-column mt-2">
                            <h5 class="fw-bold">{{$item["nama_produk"]}}</h5>
                            <span style="color: gold;" class="stuff-fare" data-fare="{{$item["harga"]}}">Rp.
                                {{$item["harga"]}}</span>
                            <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                        </div>
                        <div class="contentCard-Barang d-flex flex-column justify-content-center">
                            <img src="{{asset("img/Home/ikon-bintang.png")}}" alt="">
                        </div>

                    </div>
                </div>
            </a>
        </div>

        @endforeach
        @endif

    </div>
    <div class="btnSelengkapnya d-flex justify-content-center mt-5 ">
        <button type="submit" class="btn btn-Selengkapnya text-white mb-3">Selengkapnya <img
                src="{{asset("img/Home/Vector 1.png")}}" alt=""></button>
    </div>
</div>

<!-- /produk -->

@endsection