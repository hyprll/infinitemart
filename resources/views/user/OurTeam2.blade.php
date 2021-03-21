@extends('template.User2')

@section('title', "Our Team | InfiniteMart")

@section('content')

<!-- Start About Top -->
<div class="about-top mt-5">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between d-sm-column">
            <div class="col-md-6">
                <div class="about-img" data-aos="fade-up" data-aos-delay="0">
                    <div class="img-responsive">
                        <img src="{{asset('img')}}/about/img-about.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="title">ABOUT OUR INFINITY MART STORE</h3>
                    <h5 class="semi-title">We believe that every project existing in digital world is a result of an
                        idea and every idea has a cause.</h5>
                    <p>For this reason, our each design serves an idea. Our strength in design is reflected by our
                        name, our care for details. Our specialist won't be afraid to go extra miles just to
                        approach near perfection. We don't require everything to be perfect, but we need them to be
                        perfectly cared for. That's a reason why we are willing to give contributions at best. Not a
                        single detail is missed out under Billey's professional eyes.The amount of dedication and
                        effort equals to the level of passion and determination. Get better, together as one.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Top -->

<!-- Start Service Section -->
<div class="service-promo-section section-top-gap-100">
    <div class="service-wrapper">
        <div class="container">
            <div class="row">
                <!-- Start Service Promo Single Item -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                        <div class="image">
                            <img src="{{asset('img')}}/icons/icon_about1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">Creative Always</h6>
                            <p>Stay creative with Billey and the huge collection of premade elements, layouts &
                                effects.</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
                <!-- Start Service Promo Single Item -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="image">
                            <img src="{{asset('img')}}/icons/icon_about2.jpg" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">Express Customization</h6>
                            <p>Easy to install and configure the theme customization in a few clicks with Billey.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
                <!-- Start Service Promo Single Item -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="image">
                            <img src="{{asset('img')}}/icons/icon_about3.jpg" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">Premium Integrations</h6>
                            <p>Integrated premium plugins in Billey is the secret weapon for your business to
                                thrive.</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
                <!-- Start Service Promo Single Item -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="600">
                        <div class="image">
                            <img src="{{asset('img')}}/icons/icon_about4.jpg" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">Real-time Editing</h6>
                            <p>Edit your work and preview the changes on the screen live with advanced page builder.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Service Section -->

<!--  Start  Team Section    -->
<div class="team-section section-top-gap-100 secton-fluid section-inner-bg">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content text-center">
                            <h3 class="section-title">Meet Our Team</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Content Text Area -->
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
                                    halaman user, Membuat 50% Front End Javascript di halaman
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
                                <p class="text-center" style="margin-bottom: 60px;">Membuat 100% Api dengan di backend
                                    dengan laravel</p>
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
                                    di halaman user, membuat seller, membuat halaman not found
                                    membuat 100% Front End HTML dan CSS di halaman Admin, membuat 50% Front End
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
                                <p class="text-center" style="margin-bottom: 60px;">Membuat dan halaman
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
                                <p class="text-center" style="margin-bottom: 60px;">Membuat halaman Login dan Register</p>
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
                                <p class="text-center" style="margin-bottom: 60px;">Membuat banner Dan Memuat Halaman Login
                                </p>
                                <div class="d-flex align-items-end justify-content-center position-absolute"
                                    style="bottom: 20px; left: 50%; transform: translateX(-50%);">
                                    <p class="text-center">@mrasyido_</p>
                                </div>
                            </div>
                        </div>
                        <div class="cardOurTeam my-3">
                            <div class="ImgOurTeam d-flex justify-content-center">
                                <img class="rounded-circle" src="{{asset('img')}}/Profile_AboutUs/Ridwan.jpg" alt=""
                                    style="width: 150px;height:150px">
                            </div>
                            <div class="contentOurTeam mt-2">
                                <h5 class="text-center">Muhammad Ridwan</h5>
                                <p class="text-center">As a front end Dev</p>
                                <p class="text-center" style="margin-bottom: 60px;">Membuat Histori
                                </p>
                                <div class="d-flex align-items-end justify-content-center position-absolute"
                                    style="bottom: 20px; left: 50%; transform: translateX(-50%);">
                                    <p class="text-center">@mrid.wa.nnn_</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   End  Team Section   -->

@endsection