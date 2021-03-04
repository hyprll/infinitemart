@extends('template.user')

@section('title', "My History | InfiniteMart")

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

                    </div>
                    <div class="card-body">
                        <img src="{{asset("img/character/anima5.png")}}" class="anima5 user-select-none">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card right-area-top">
                <div class="card-body d-flex align-items-center">
                    <label name="profil" class="text-profil mt-1">History Saya</label>
                </div>
            </div>
            <div clas="col-9">
                <div class="card right-area-bottom">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12" id="history">
                                {{-- <div class="loadingHistory d-flex justify-content-center align-items-center" style="width: 100%;min-height:450px">
                                    <img src="{{asset("img/gif/roll1.gif")}}" alt="" style="width: 100px">
                            </div> --}}
                            {{-- <div class="loadingHistory d-flex justify-content-center align-items-center"
                                style="width: 100%;min-height:450px">
                                <div class="row justify-content-center">
                                    <img src="{{asset("img/character/intip.png")}}" alt="" style="width: 450px">
                                    <h3 class="h2 text-center mt-3">Data Not Found</h3>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection