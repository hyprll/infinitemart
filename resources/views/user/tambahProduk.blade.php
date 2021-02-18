@extends('template.User')

@section('title', "Tambah Produk Sweet Home")

@section('content')

<form action="{{route("tambahProdukProses")}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_toko" id="id_toko" value="{{$id_toko}}">
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
                                    <input type="text" class="form-control" name="NamaProduk" placeholder="Nama Produk">
                                    <small class="validation text-danger">

                                    </small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="inputValue d-flex flex-column mt-3">
                                    <label for="" class="mb-2">Harga Produk</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                        <input type="text" class="form-control" placeholder="Harga Produk"
                                            name="hargaProduk" aria-label="Username" aria-describedby="basic-addon1"
                                            onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                    </div>
                                    <small class="validation text-danger">

                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="inputValue d-flex flex-column mt-3">
                            <label for="" class="mb-2">User Di Izinkan</label>
                            <div class="row">
                                <input type="hidden" name="checkUser" id="checkUser" class="form-control">
                                @if ($user)
                                @php($i=1)

                                @foreach ($user as $key)
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input checkIzinUser" name="izinUser{{$i}}"
                                            type="checkbox" value="{{$key["id_user"]}}" id="izinUser{{$i}}">
                                        <label class="form-check-label" for="izinUser{{$i}}">
                                            {{$key['username']}}
                                        </label>
                                    </div>
                                </div>
                                @php($i++)
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex mt-3">
                            <button type="submit" class="btn btn-primary" style="width: 15vw;"
                                id="btn-upload-produk">Upload</button>
                            {{-- <button type="submit" class="btn btn-danger"
                                                        style="width: 15vw; margin-left: 2.5vw;">Batal</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection