@extends('template.User')

@section('title', "Edit Produk | InfiniteMart")

@section('content')

<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_produk" id="id_produk" value="{{$id_produk}}">
    <input type="hidden" name="id_toko" id="id_toko">

    <div class="container mt-5" id="headTambahProdukContent">
        <div class="cardTambahProduk">
            <div class="headerTambahProduk mt-3">
                <h5>Edit Produk</h5>
            </div>
            <div class="contentTambahProduk">
                <p class="mt-3">Upload Gambar Produk</p>
                <div class="imgFlex">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cardImgFlex d-flex justify-content-center align-items-center">
                                <img src="" class="img-fluid user-select-none" id="main_img_preview" style="width: 50%">
                            </div>
                            <div class="footerCardImg mt-2 text-center">
                                <label for="main_img" class="text-center" style="cursor: pointer">Gambar Utama</label>
                                <input type="file" name="main_img" class="d-none" id="main_img"
                                    accept="image/jpg,image/png,image/jpeg"><br>
                                <small class="text-danger validation-update"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cardImgFlex d-flex justify-content-center align-items-center">
                                <img src="" class="img-fluid user-select-none" id="other_img_preview"
                                    style="width: 50%">
                            </div>
                            <div class="footerCardImg mt-2 text-center">
                                <label for="other_img" class="text-center" style="cursor: pointer">Gambar
                                    Lainnya</label>
                                <input type="file" name="other_img" class="d-none" id="other_img"
                                    accept="image/jpg,image/png,image/jpeg"><br>
                                <small class="text-danger validation-update"></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="contentTambahProduk">
        <div class="cardDetailProduk mt-4">
            <div class="headerDetailProduk mt-3">
                <h5>Detail Produk</h5>
                <input type="hidden" class="form-control" name="img_main_old" placeholder="Nama Produk"
                    id="img_main_old" value="">
                <input type="hidden" class="form-control" name="img_other_old" placeholder="Nama Produk"
                    id="img_other_old" value="">
            </div>
            <div class="contentDetailProduk">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="inputValue d-flex flex-column mt-3">
                                    <label for="" class="mb-2">Nama Produk</label>
                                    <input type="text" class="form-control" id="NamaProduk" name="NamaProduk"
                                        placeholder="Nama Produk" value="">
                                    <small class="validation-update text-danger"></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="inputValue d-flex flex-column mt-3">
                                    <label for="" class="mb-2">Harga Produk</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                        <input type="text" class="form-control" placeholder="Harga Produk"
                                            id="hargaProduk" name="hargaProduk" aria-label="Username"
                                            aria-describedby="basic-addon1"
                                            onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                            value="">
                                    </div>
                                    <small class="validation-update text-danger"></small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="inputValue d-flex flex-column mt-3">
                            <label for="" class="mb-2">User Di Izinkan</label>
                            <input type="hidden" class="form-control d-none" name="user_permit" id="user_permit">
                            <small class="text-danger validation-other"></small>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user_permitted"
                                            id="user_permitted1" value="1">
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
                                        <input type="email" class="form-control" placeholder="Cari user dengan email"
                                            aria-describedby="btn-search-user" id="searchUser">
                                        <button class="btn btn-primary" type="button" id="btn-search-user"
                                            style="min-width: 40px">
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
                    <div class="col-md-12">
                        <div class="d-flex mt-3">
                            <button type="submit" class="btn btn-primary" style="width: 15vw;"
                                id="btn-update-produk">Update Produk</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection