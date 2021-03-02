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
            <div class="contentProfileAdmin">
                <div class="container">
                    <div class="row">
                        <label class="text-danger AuthUser" style="transform: translateY(-2.5vh); display: none;"></label>
                        <div class="col-md-6">
                            <div class="inputAdmin d-flex flex-column">
                                <label for="email" class="text-secondary">Email</label>
                                <input type="email" name="email" id="email" value="raqwan@gmail.com" class="form-control mt-2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputAdmin d-flex flex-column">
                                <label for="name" class="text-secondary">Nama</label>
                                <input type="text" name="name" id="name" value="Muhammad Raqwan" class="form-control mt-2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputAdmin mt-3 d-flex flex-column">
                                <label for="password" class="text-secondary">Password</label>
                                <input type="password" name="password" id="password" class="form-control mt-2">
                                <label class="text-danger AuthPassword" style="font-size: 14px; display: none;"></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputAdmin mt-3 d-flex flex-column">
                                <label for="ConfirmPassword" class="text-secondary">Confirmasi Password</label>
                                <input type="password" name="ConfirmPassword" id="confirmPassword" class="form-control mt-2">
                                <label class="text-danger AuthConfirmPassword" style="font-size: 14px; display: none;"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="titleContent">
                    <p class="my-5">Informasi Kontak</p>
                    <div class="lineTitleAdmin"></div>
                </div>
            </div>
            <div class="contentProfileAdmin">
                <div class="container">
                    <div class="row">
                        <label class="text-danger AuthContact" style="transform: translateY(-2.5vh); display: none;"></label>
                        <div class="col-md-12">
                            <div class="inputAdmin d-flex flex-column">
                                <label for="address" class="text-secondary">Alamat</label>
                                <input type="text" name="address" id="address" value="Jalan Cilangkap" class="form-control mt-2">
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="inputAdmin d-flex flex-column">
                                <label for="city" class="text-secondary">Kota</label>
                                <input type="text" name="city" id="city" value="Depok" class="form-control mt-2">
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="inputAdmin d-flex flex-column">
                                <label for="Country" class="text-secondary">Negara</label>
                                <input type="text" name="Country" id="country" value="Indonesia" class="form-control mt-2">
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="inputAdmin d-flex flex-column">
                                <label for="postalCode" class="text-secondary">Kode Pos</label>
                                <input type="text" name="postalCode" id="postalCode" value="12345" class="form-control mt-2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="btnContent-profile mt-4">
                        <button type="submit" class="btn btnUpdate-Profile mb-3">Ubah Profile Anda</button>
                    </div>
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