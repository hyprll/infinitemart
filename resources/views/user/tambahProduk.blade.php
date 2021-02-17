@extends('template.User')

@section('title', "Tambah Produk Sweet Home")

@section('content')

<form action="#" method="POST">
    <div class="container mt-5">
        <div class="cardTambahProduk">
            <div class="headerTambahProduk mt-3">
                <h5>Tambah Produk</h5>
            </div>
            <div class="contentTambahProduk">
                <p class="mt-3">Upload Gambar Produk</p>
                <div class="imgFlex">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="cardImgFlex">

                            </div>
                            <div class="footerCardImg mt-2">
                                <p class="text-center">Gambar Utama</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cardImgFlex">

                            </div>
                            <div class="footerCardImg mt-2">
                                <p class="text-center">Gambar 2</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cardImgFlex">

                            </div>
                            <div class="footerCardImg mt-2">
                                <p class="text-center">Gambar 3</p>
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
                        <div class="inputValue d-flex flex-column mt-3">
                            <label for="" class="mb-2">Nama Produk</label>
                            <input type="text" class="form-control" name="NamaProduk" placeholder="Nama Produk">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputValue d-flex flex-column mt-3">
                            <label for="" class="mb-2">User Di Izinkan</label>
                            <select name="allowUser" class="form-select form-select mb-3" style="color: gray;">
                                <option selected>Izinkan User</option>
                                <option value="">User 1</option>
                                <option value="">User 2</option>
                                <option value="">User 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="inputValue d-flex flex-column mt-3">
                            <label for="" class="mb-2">Deskripsi Produk</label>
                            <textarea class="form-control" placeholder="Tuliskan Deskripsi Produk Anda"
                                id="floatingTextarea2" style="height: 100px; resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="inputValue d-flex flex-column mt-3">
                            <label for="" class="mb-2">Harga Produk</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                                <input type="text" class="form-control" placeholder="Harga Produk" aria-label="Username"
                                    aria-describedby="basic-addon1"
                                    onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex mt-3">
                            <button type="submit" class="btn btn-primary" style="width: 15vw;">Upload</button>
                            <button type="submit" class="btn btn-danger"
                                style="width: 15vw; margin-left: 2.5vw;">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection