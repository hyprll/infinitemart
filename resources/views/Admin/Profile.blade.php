@extends('template/Admin')
@section("title", "Profile Admin")

@section('content')
<div class="intoAdmin">
    <div class="container">
        <h1 class="text-white" style="margin-top: 10vh;">Hallo Raqwan</h1>
        <p class="mt-4 text-white" style="width: 50%;">Ini adalah halaman profil Anda. Anda dapat melihat kemajuan yang Anda buat dengan pekerjaan Anda dan mengelola proyek atau tugas yang diberikan</p>
        <button type="submit" class="btn mt-3">Ubah Profil</button>
    </div>
</div>
<div class="row" style="margin-top: 4rem">
    <div class="col-md-8">
        <div class="cardProfileAdmin">
            <div class="headerProfileAdmin d-flex justify-content-between">
                <h5 class="text-white" style="transform: translateY(50%); font-size: 17px;">Ubah Profil</h5>
                <button type="submit" class="btn">Pengaturan</button>
            </div>
            <div class="container">
                <div class="titleContent">
                    <p class="mb-5">Informasi Admin</p>
                    <div class="lineTitleAdmin"></div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-12 mb-2 d-flex justify-content-between">
                    <p>Username</p>
                    <p>Rizky</p>
                </div>
                <div class="col-md-12 mb-2 d-flex justify-content-between">
                    <p>Nama Depan</p>
                    <p>Rizky</p>
                </div>
                <div class="col-md-12 mb-2 d-flex justify-content-between">
                    <p>Nama Belakang</p>
                    <p>Ramadhan</p>
                </div>
                <div class="col-md-12  mb-2 d-flex justify-content-between">
                    <p>Aalamat Email</p>
                    <p>rizky@gmail.com</p>
                </div>
                <div class="col-md-12 mb-2 d-flex justify-content-between">
                    <p>No. Telepon</p>
                    <p>+62 1209891809</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="cardProfileAdmin">
            <div class="topImgProfile">
                <img src="{{asset('img')}}/header/car1.jpg" alt="">
            </div>
            <div class="contentProfile-right d-flex justify-content-center align-items-center">
                <img src="{{asset('img')}}/Produk/gelasPink.png" class="rounded-circle clickBtnProfile" alt="">
                <div class="editImgAdmin">
                    <i class="material-icons btnEdit">edit</i>
                    <div class="infoEdit-Lanjutan">

                        <div class="cardInfoEdit">
                            <div class="relativeCard">
                                <div class="cardInfoEdit-2">
                                    <input type="file" id="profileAdmin" style="display: none;">
                                    <input type="file" id="bgProfileAdmin" style="display: none;">
                                </div>
                                <div class="moreEdit">
                                    <label for="profileAdmin" class="text-center">Ganti Profil</label>
                                    <label for="bgProfileAdmin" class="text-center">Ganti Bg Profil</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="btnInfoPerform d-flex justify-content-between">
                <button type="submit" class="btn btn-perform">Terhubung</button>
                <button type="submit" class="btn btn-perform">Sangat Baik</button>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="taskJob d-flex flex-column">
                        <p class="text-center">12</p>
                        <p class="text-center">Teks</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fixedIssue d-flex flex-column">
                        <p class="text-center">8</p>
                        <p class="text-center">Perbaiki Masalah</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contributor d-flex flex-column">
                        <p class="text-center">20</p>
                        <p class="text-center">Contribusi</p>
                    </div>
                </div>
            </div>
            <div class="endProfileCard mt-3">
                <h5 class="text-center" style="font-size: 20px;">Muhammad Raqwan</h5>
                <p class="text-center" style="font-size: 15px;">Depok, Indonesia</p>
                <p class="text-center" style="font-size: 15px;">CEO</p>
                <h5 class="text-center text-secondary" style="font-size: 17px;">Universitas Institut Teknologi Konfederasi Zürich</h5>
            </div>
        </div>
    </div>
</div>
@endsection