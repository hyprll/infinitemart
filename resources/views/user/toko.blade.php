@extends('template.User')

@section('title', "Toko Sweet Home")

@section('content')

<!-- * Header -->

<div class="headerCarousel3">
    <img src="http://localhost:8080/uploads/toko/{{$toko['background']}}" class="w-100 img-fluid" id="background-img">
</div>

<!-- /Header -->

<div class="container">
    <div class="col-md-12">
        <div class="infoHeader">
            <div class="ProfileImgToko d-flex justify-content-center align-items-center">
                <img src="http://localhost:8080/uploads/toko/{{$toko['logo']}}" alt="" class="rounded-circle"
                    id="logo-img">
            </div>
            <div class="row px-3 no-edit-toko-content">
                <h4 class="no-edit-toko-content">{{$toko['nama_toko']}}</h4>
                <span class="no-edit-toko-content">
                    @php
                    echo nl2br($toko["deskripsi"])
                    @endphp
                </span>
            </div>

            @if ($session !== null)
            @if ($session["id_user"] == $toko["id_user"])
            <form action="{{route("updateToko")}}" method="POST" id="form-update-toko" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_toko" value="{{$toko['id_toko']}}">
                <input type="hidden" name="old_logo" value="{{$toko['logo']}}">
                <input type="hidden" name="old_bg" value="{{$toko['background']}}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row px-3">
                            <div class="col-md-12">
                                <label for="" class="edit-toko-content">Nama Toko</label>
                                <input type="text" class="form-control edit-toko-content" value="{{$toko['nama_toko']}}"
                                    name="namaToko">
                                <small class="validation text-danger edit-toko-content"></small>
                            </div>
                        </div>
                        <div class="row px-3">
                            <div class="col-md-12">
                                <label for="" class="edit-toko-content mt-3">Deskripsi Toko</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control edit-toko-content"
                                    style="min-height: 150px">{{$toko['deskripsi']}}</textarea>
                                <small class="validation text-danger edit-toko-content"></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 edit-toko-content">
                        <div class="row px-3 mb-3">
                            <label for="">Ubah Logo</label>
                            <input class="form-control" type="file" id="logo" name="logo">
                        </div>
                        <div class="row px-3 mb-3">
                            <label for="">Ubah Backgorund</label>
                            <input class="form-control" type="file" id="background" name="background">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <button type="submit" class="btn w-100 btn-success" id="btn-update-toko">Update
                                    Toko</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn w-100 btn-danger"
                                    id="btn-cancel-toko">Batalkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row mt-3 px-3 no-edit-toko-content">
                <div class="col-md-3 mb-3">
                    <button class="btn w-100 btn-info" id="btn-edit-toko">Edit Toko</button>
                </div>
                <div class="col-md-3">
                    <a href="{{route("tambahProduk")}}" class="btn w-100 btn-success">Tambah produk</a>
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