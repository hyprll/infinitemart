@extends('template.User2')

@section('title', "Tambah Produk | InfiniteMart")

@section('content')

<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_toko" id="id_toko" value="">
    <div class="container mt-5">
        <div class="cardTambahProduk">
            <div class="headerTambahProduk mt-3">
                <h5>Tambah Produk</h5>
            </div>
            <div class="contentTambahProduk">
                <p class="mt-3">Upload Gambar Produk</p>
                <div class="imgFlex">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cardImgFlex d-flex justify-content-center align-items-center">
                                <img src="{{asset("img/Home/VectorImg.png")}}" class="img-fluid user-select-none"
                                    id="main_img_preview" style="width: 50%">
                            </div>
                            <div class="footerCardImg mt-2 text-center">
                                <label for="main_img" class="text-center" style="cursor: pointer">Gambar Utama</label>
                                <input type="file" name="main_img" class="d-none" id="main_img"
                                    accept="image/jpg,image/png,image/jpeg"><br>
                                <small class="validation text-danger">
                                    {{Session::get('gambar_error_status')}}
                                </small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cardImgFlex d-flex justify-content-center align-items-center">
                                <img src="{{asset("img/Home/VectorImg.png")}}" class="img-fluid user-select-none"
                                    id="other_img_preview" style="width: 50%">
                            </div>
                            <div class="footerCardImg mt-2 text-center">
                                <label for="other_img" class="text-center" style="cursor: pointer">Gambar
                                    Lainnya</label>
                                <input type="file" name="other_img" class="d-none" id="other_img"
                                    accept="image/jpg,image/png,image/jpeg"><br>
                                <small class="validation text-danger">
                                    {{Session::get('gambar_lain_error_status')}}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="cardDetailProduk mt-4">
            <div class="headerDetailProduk mt-3">
                <h5>Detail Produk</h5>
            </div>
            <div class="contentDetailProduk">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="inputValue d-flex flex-column mt-3">
                                    <label for="" class="mb-2">Nama Produk</label>
                                    <input type="text" class="form-control" name="NamaProduk" placeholder="Nama Produk"
                                        id="NamaProduk">
                                    <small class="validation text-danger">
                                        {{Session::get('nama_produk_error_status')}}
                                    </small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="inputValue d-flex flex-column mt-3">
                                    <label for="" class="mb-2">Harga Produk</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                        <input type="text" class="form-control" placeholder="Harga Produk"
                                            name="hargaProduk" id="hargaProduk" aria-label="Username"
                                            aria-describedby="basic-addon1"
                                            onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                    </div>
                                    <small class="validation text-danger">
                                        {{Session::get('harga_error_status')}}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputValue d-flex flex-column mt-3">
                            <label for="" class="mb-2">User Di Izinkan</label>
                            <input type="hidden" class="form-control d-none" name="user_permit" id="user_permit" value="all">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user_permitted"
                                            id="user_permitted1" checked value="1">
                                        <label class="form-check-label" for="user_permitted1">
                                            Semua User
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user_permitted"
                                            id="user_permitted2" value="2">
                                        <label class="form-check-label" for="user_permitted2">
                                            Pilih User
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger validation-other"></small>
                            <div class="row mt-3 section-search-user">
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Cari user dengan nomor telepon"
                                            aria-describedby="btn-search-user" id="searchUser">
                                        <button class="btn btn-primary" type="button" id="btn-search-user"
                                            style="min-width: 40px; color:white;">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 overflow-auto" style="max-height: 200px">
                                    <span>List Users</span>
                                    <ul class="list-group mt-2" id="listUsers">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="d-flex mt-3">
                        <button type="submit" class="btn btn-primary" style="width: 15vw;"
                            id="btn-upload-produk"><h5 style="color: white;"> Upload</h5></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
<br>

@endsection