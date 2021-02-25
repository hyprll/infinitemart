@extends('template.user')

@section('title', "My Profile")

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
                        <label for="user-profil" class="user-profil" id="user-profil-name">
                            {{-- {{$session["username"]}} --}}
                        </label>
                    </div>
                    <div class="card-body" id="card-menu-profile">
                        {{-- <i class="fas fa-user user-left"></i>
                        <a href="{{route("profile")}}" class="profile-card-left" type="button">My Profile</a> --}}
                        {{-- @if ($hasToko)
                        <i class="fas fa-store-alt store-left"></i>
                        <a href="{{url("toko/".$id_toko)}}" class="store-card-left" type="button">Toko Saya</a>
                        @else --}}
                        {{-- <i class="fas fa-store-alt store-left"></i>
                        <a href="{{route("seller")}}" class="store-card-left" type="button">Buat Toko</a>
                        <i class="fas fa-history history-left"></i>
                        <a href="{{route("profile")}}" class="history-card-left" type="button">History</a>

                        <i class="fas fa-sign-in-alt logout-left"></i>
                        <label for="label-left" class="logout-card-left" type="button" id="logoutBtn">
                            Logout
                        </label> --}}
                        {{-- <form action="{{route("logout")}}" method="POST" class="d-none" id="logoutForm">
                        @csrf
                        </form> --}}
                    </div>
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
                            <div class="col-4" id="biodata">
                                {{-- <h6>Username</h6>
                                <label name="username" class="username">
                                    {{$session["username"]}}
                                </label>
                                <h3>Nama Depan</h3>
                                <label name="username" class="username">
                                    {{$session["first_name"]}}
                                </label>
                                <h3>Nama Belakang</h3>
                                <label name="username" class="username">
                                    {{$session["last_name"]}}
                                </label>
                                <h3>alamat Email</h3>
                                <label name="username" class="username">
                                    {{$session["email"]}}
                                </label>
                                <h3>No.Telepon</h3>
                                <label name="username" class="username">
                                    {{$session["phone"]}}
                                </label> --}}
                            </div>
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