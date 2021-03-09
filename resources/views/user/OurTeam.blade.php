@extends('template.User')

@section('title', "Our Team | InfiniteMart")

@section('content')

<div class="headerOurTeam text-center root" id="ourTeam">
    <h2 class="text-center mt-5">Our Team</h2>
    <span class="text-center mb-5">Contact and meet all of our team here</span>
</div>

<div class="contentOurTeam root">
    <div class="container">
        <div class="col-md-12">
            <div class="flexWrapper">
                <div class="WrapperOwl owl-carousel owl-theme">
                    <div class="cardOurTeam my-3">
                        <div class="ImgOurTeam d-flex justify-content-center">
                            <img class="rounded-circle img-fluid img-team"
                                src="{{asset('img')}}/Profile_AboutUs/Rizky.jpg" alt=""
                                style="width: 150px;height:150px">
                        </div>
                        <div class="contentOurTeam mt-2">
                            <h5 class="text-center">Rizki Ramadhan</h5>
                            <p class="text-center">As a front end Dev</p>
                            <p class="text-center" style="margin-bottom: 60px;">Membuat 100% Front End Javascript di
                                halaman user, Membuat Seller Account, Membuat 50% Front End Javascript di halaman
                                admin, Membuat Halaman Searching Produk dan Edit Produk</p>
                            <div class="d-flex align-items-end justify-content-center position-absolute"
                                style="bottom: 20px; left: 50%; transform: translateX(-50%);">
                                <p class="text-center">@kkyy1310</p>
                            </div>
                        </div>
                    </div>
                    <div class="cardOurTeam my-3">
                        <div class="ImgOurTeam d-flex justify-content-center">
                            <img class="rounded-circle img-fluid img-team"
                                src="{{asset('img')}}/Profile_AboutUs/Gilang.png" alt=""
                                style="width: 150px;height:150px">
                        </div>
                        <div class="contentOurTeam mt-2">
                            <h5 class="text-center">Gilang</h5>
                            <p class="text-center">As a Back end Dev</p>
                            <p class="text-center" style="margin-bottom: 60px;">Membuat 100% Api dengan di backend dengan laravel</p>
                            <div class="d-flex align-items-end justify-content-center position-absolute"
                                style="bottom: 20px; left: 50%; transform: translateX(-50%);">
                                <p class="text-center">@langpp</p>
                            </div>
                        </div>
                    </div>
                    <div class="cardOurTeam my-3">
                        <div class="ImgOurTeam d-flex justify-content-center">
                            <img class="rounded-circle" src="{{asset('img')}}/Profile_AboutUs/Raqwan.jpg" alt=""
                                style="width: 150px;height:150px">
                        </div>
                        <div class="contentOurTeam mt-2">
                            <h5 class="text-center">M.Raqwan.Khautar</h5>
                            <p class="text-center">As a front end Dev</p>
                            <p class="text-center" style="margin-bottom: 60px;">Membuat 60% Front End HTML dan CSS
                                di halaman user, membuat register,
                                membuat 100% Front End HTML dan CSS di halaman Admin, membuat 85% Front End
                                Javascript di halaman Admin</p>
                            <div class="d-flex align-items-end justify-content-center position-absolute"
                                style="bottom: 20px; left: 50%; transform: translateX(-50%);">
                                <p class="text-center">@m.raqwan.jr</p>
                            </div>
                        </div>
                    </div>
                    <div class="cardOurTeam my-3">
                        <div class="ImgOurTeam d-flex justify-content-center">
                            <img class="rounded-circle" src="{{asset('img')}}/Profile_AboutUs/Pancaran.jpg" alt=""
                                style="width: 150px;height:150px">
                        </div>
                        <div class="contentOurTeam mt-2">
                            <h5 class="text-center">Pancaran Ratna M</h5>
                            <p class="text-center">As a UI/UX design</p>
                            <p class="text-center" style="margin-bottom: 60px;">Planning, analisis masalah, Desainer
                                User, Login, Register</p>
                            <div class="d-flex align-items-end justify-content-center position-absolute"
                                style="bottom: 20px; left: 50%; transform: translateX(-50%);">
                                <p class="text-center">@pncrn_</p>
                            </div>
                        </div>
                    </div>
                    <div class="cardOurTeam my-3">
                        <div class="ImgOurTeam d-flex justify-content-center">
                            <img class="rounded-circle" src="{{asset('img')}}/Profile_AboutUs/Andika.jpg" alt=""
                                style="width: 150px;height:150px">
                        </div>
                        <div class="contentOurTeam mt-2">
                            <h5 class="text-center">Muhammad Andika</h5>
                            <p class="text-center">As a front end Dev</p>
                            <p class="text-center" style="margin-bottom: 60px;">Membuat halaman login dan halaman
                                profile user</p>
                            <div class="d-flex align-items-end justify-content-center position-absolute"
                                style="bottom: 20px; left: 50%; transform: translateX(-50%);">
                                <p class="text-center">@andikasp03_</p>
                            </div>
                        </div>
                    </div>
                    <div class="cardOurTeam my-3">
                        <div class="ImgOurTeam d-flex justify-content-center">
                            <img class="rounded-circle" src="{{asset('img')}}/Profile_AboutUs/Yoza.jpg" alt=""
                                style="width: 150px;height:150px">
                        </div>
                        <div class="contentOurTeam mt-2">
                            <h5 class="text-center">Ahmad Yoza</h5>
                            <p class="text-center">As a front end Dev</p>
                            <p class="text-center" style="margin-bottom: 60px;">Membuat halaman welcome dan halaman
                                history user</p>
                            <div class="d-flex align-items-end justify-content-center position-absolute"
                                style="bottom: 20px; left: 50%; transform: translateX(-50%);">
                                <p class="text-center">@ahmadyoza_</p>
                            </div>
                        </div>
                    </div>
                    <div class="cardOurTeam my-3">
                        <div class="ImgOurTeam d-flex justify-content-center">
                            <img class="rounded-circle" src="{{asset('img')}}/Profile_AboutUs/Akbar.jpg" alt=""
                                style="width: 150px;height:150px">
                        </div>
                        <div class="contentOurTeam mt-2">
                            <h5 class="text-center">Muhammad Akbar</h5>
                            <p class="text-center">As a UI/UX design</p>
                            <p class="text-center" style="margin-bottom: 60px;">Membuat Banner, Gambar Produk dan
                                Logo InfiniteMart</p>
                            <div class="d-flex align-items-end justify-content-center position-absolute"
                                style="bottom: 20px; left: 50%; transform: translateX(-50%);">
                                <p class="text-center">@bar_abdlh</p>
                            </div>
                        </div>
                    </div>
                    <div class="cardOurTeam my-3">
                        <div class="ImgOurTeam d-flex justify-content-center">
                            <img class="rounded-circle" src="{{asset('img')}}/Profile_AboutUs/Jaya.jpg" alt=""
                                style="width: 150px;height:150px">
                        </div>
                        <div class="contentOurTeam mt-2">
                            <h5 class="text-center">Nurjaya Setiawan</h5>
                            <p class="text-center">As a UI/UX design</p>
                            <p class="text-center" style="margin-bottom: 60px;">Membuat Mockup admin, maskot dan
                                banner</p>
                            <div class="d-flex align-items-end justify-content-center position-absolute"
                                style="bottom: 20px; left: 50%; transform: translateX(-50%);">
                                <p class="text-center">@ir.jaya19</p>
                            </div>
                        </div>
                    </div>
                    <div class="cardOurTeam my-3">
                        <div class="ImgOurTeam d-flex justify-content-center">
                            <img class="rounded-circle" src="{{asset('img')}}/Profile_AboutUs/Owen.jpg" alt=""
                                style="width: 150px;height:150px">
                        </div>
                        <div class="contentOurTeam mt-2">
                            <h5 class="text-center">Owen Parwonangan</h5>
                            <p class="text-center">As a UI/UX design</p>
                            <p class="text-center" style="margin-bottom: 60px;">Membuat Mockup admin dan banner</p>
                            <div class="d-flex align-items-end justify-content-center position-absolute"
                                style="bottom: 20px; left: 50%; transform: translateX(-50%);">
                                <p class="text-center">@owen.tersinggung</p>
                            </div>
                        </div>
                    </div>
                    <div class="cardOurTeam my-3">
                        <div class="ImgOurTeam d-flex justify-content-center">
                            <img class="rounded-circle" src="{{asset('img')}}/Profile_AboutUs/Rasyid.jpg" alt=""
                                style="width: 150px;height:150px">
                        </div>
                        <div class="contentOurTeam mt-2">
                            <h5 class="text-center">Muhammad Rasyid R</h5>
                            <p class="text-center">As a UI/UX design</p>
                            <p class="text-center" style="margin-bottom: 60px;">Membuat banner</p>
                            <div class="d-flex align-items-end justify-content-center position-absolute"
                                style="bottom: 20px; left: 50%; transform: translateX(-50%);">
                                <p class="text-center">@mrasyido_</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection