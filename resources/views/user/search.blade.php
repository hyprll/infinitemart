@extends('template.User')

@section('title', "Home | InfiniteMart")

@section('content')


<!-- * Produk -->

<div class="container mt-5">

    <div class="row">
        <h3>Hasil Pencarian untuk <strong>"{{$keyword}}"</strong></h3>
        <hr>
    </div>

    <div class="row">

        @if (count($produk) > 0)
        @foreach ($produk as $item)

        <div class="col-md-3">
            <a href="{{url("/detail/" . $item['id_produk'])}}" style="text-decoration: none;color:inherit;">
                <div class="sellerCard-Barang mb-4">
                    <div class="topImg-seller d-flex justify-content-center">
                        <img src="http://localhost:8080/uploads/produk/{{$item["gambar"]}}"
                            alt="InfiniteMart {{$item["nama_produk"]}}" height="250px" class="user-select-none">
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
        @else
        <div class="col-12 my-5">
            <div class="row justify-content-center">
                <img src="{{asset("img/character/INTIP.png")}}" alt="" class="user-select-none" style="width: 500px">
                <h2 class="text-center">{{$message}}</h2>
            </div>
        </div>
        @endif

    </div>
</div>

<!-- /produk -->

@endsection