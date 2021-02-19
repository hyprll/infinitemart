@extends('template.User')

@section('title', "Toko Sweet Home")

@section('content')

<!-- * Header -->

<div class="headerCarousel3">
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
            @if ($session !== null)
            @if ($session["id_user"] == $toko["id_user"])
            <div class="row mt-3 px-3">
                <div class="col">
                    <a href="{{route("tambahProduk")}}" class="btn btn-success">Tambah produk</a>
                </div>
            </div>
            @endif
            @endif
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <h3>Barang Di Toko</h3>
        <hr>
    </div>
    <div class="row">
        @if ($produk)
        @foreach ($produk as $key)
        <div class="col-md-3">

            <div class="sellerCard-Barang mb-4 pb-3">
                <a href="{{url("/detail/" . $key['id_produk'])}}" style="text-decoration: none;color:inherit;">
                    <div class="topImg-seller d-flex justify-content-center">
                        <img src="http://localhost:8080/uploads/produk/{{$key["gambar"]}}"
                            alt="InfiniteMart {{$key["nama_produk"]}}" height="250px" class="user-select-none">
                    </div>
                    <div class="container d-flex justify-content-between">

                        <div class="contentCard-Barang d-flex flex-column mt-2">
                            <h5 class="fw-bold">{{$key["nama_produk"]}}</h5>
                            <span class="stuff-fare" data-fare="{{$key["harga"]}}" style="color: gold;">
                                {{$key["harga"]}}
                            </span>
                            <span class="StokTersedia mt-1 mb-3">Stok Tersedia</span>
                        </div>

                    </div>
                </a>

                @if ($session !== null)
                @if ($session["id_user"] == $toko["id_user"])
                <div class="container mb-3">
                    <div class="row g-1">
                        <div class="col-9">
                            <a href="{{url("toko/edit/".$key["id_produk"])}}" class="btn btn-primary w-100">Edit
                                Barang</a>
                        </div>
                        <div class="col-3">
                            <a href="" class="btn btn-danger w-100 btn-delete">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                            <form action="{{url("toko/delete")}}" method="post">
                                @csrf
                                <input type="hidden" name="id_toko" value="{{$toko['id_toko']}}">
                                <input type="hidden" name="id_produk" value="{{$key["id_produk"]}}">
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @endif

            </div>
        </div>
        @endforeach
        @else 
        <h3 class="text-center my-5">Tidak Ada Produk Yang Tersedia</h3>
        @endif

    </div>
</div>

@endsection