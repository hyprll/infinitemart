@extends('auth/template/Auth')

@section("title", "Seller")

@section('content')
<div class="sellerContainer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card cardSeller px-3">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="sellerHeader text-center">Daftar Menjadi Seller</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action="{{route("seller_proses")}}" method="POST" enctype="multipart/form-data"
                                id="form-seller">
                                @csrf

                                <div class="form-group mt-2">
                                    <label for="" class="form-label small">Nama Toko</label>
                                    <input type="text" class="w-100 form-control form-control-sm" name="nama_toko" autocomplete="off" id="nama_toko">
                                    <small class="validate">
                                        {{Session::get('nama_toko_error_status')}}
                                    </small>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="logoToko" class="form-label small">Logo Toko</label>
                                    <input class="form-control form-control-sm" id="logoToko" type="file"
                                        name="logo" accept="image/jpg,image/png,image/jpeg,image/gif">
                                    <small class="validate">
                                        {{Session::get('logo_error_status')}}
                                    </small>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="bgToko" class="form-label small">Background Toko</label>
                                    <input class="form-control form-control-sm" id="bgToko" type="file" name="background"
                                        accept="image/jpg,image/png,image/jpeg,image/gif">
                                    <small class="validate">
                                        {{Session::get('background_error_status')}}
                                    </small>
                                </div>

                                <div class="form-group">
                                    <label for="" class="form-label small">Deskripsi Toko</label>
                                    <textarea name="deskripsi" style="resize:none"
                                        class="w-100 form-control" id="deskripsiToko"></textarea>
                                    <small class="validate">
                                        {{Session::get('deskripsi_error_status')}}
                                    </small>
                                </div>

                                <div class="form-group mt-4">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <button type="submit" class="btn btn-seller w-100">Daftar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('/img/Character/anima4.2.png')}}" alt="anima4" class="anima1" loading="lazy">
    </div>
</div>
@endsection