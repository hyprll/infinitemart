@extends('template.User')

@section('title', "My Profile | InfiniteMart")

@section('content')

<div class="container root">
    <div class="row">
        <div class="col">
            <div class="card left-area">
                <div class="card-body">
                    <div class="card-img-top text-center">
                        <img src="{{asset("img/DetailProduk/user.png")}}" type="button" class="user-select-none">
                    </div>
                    <div class="card-img-top text-center">
                        <i class="fa fa-pen icon-pencil" type="button"></i>
                    </div>
                    <div class="card-body">
                        <label for="user-profil" class="user-profil" id="user-profil-name"></label>
                    </div>
                    <div class="card-body" id="card-menu-profile"></div>
                    <div class="card-body">
                        <img src="{{asset("img/character/anima5.png")}}" class="anima5 user-select-none">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card right-area-top">
                <div class="card-body">
                    <label name="profil" class="text-profil">Profil Saya</label>
                    <p>Anda dapat mengontrol,melindungi,dan mengamankan akun anda</p>
                </div>
            </div>
            <div clas="col-9">
                <div class="card right-area-bottom">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4" id="biodata" style="z-index: 8"></div>
                            <div class="col-8">
                                <div class="card right-area">
                                    <div class="card-body">
                                        <div class="card-img-top text-center">
                                            <img src="{{asset("img/DetailProduk/user.png")}}"
                                                class="imgUser user-select-none" type="button">
                                        </div>
                                        <div class="card-img-top text-center">
                                            <i class="fa fa-pen icon-pencil" type="button"></i>
                                        </div>
                                        <h2>Ukuran gambar: max 1MB</h2>
                                        <h2>Format gambar: JPEG, PNG</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection