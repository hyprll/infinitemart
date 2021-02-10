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
                            <form action="">
                                <div class="form-group mt-2">
                                    <label for="" class="form-label small">Email</label>
                                    <input type="email" class="w-100 form-control form-control-sm">
                                </div>

                                <div class="form-group mt-2">
                                    <label for="" class="form-label small">Nama Toko</label>
                                    <input type="text" class="w-100 form-control form-control-sm">
                                </div>

                                <div class="form-group">
                                    <label for="" class="form-label small">No Telepon</label>
                                    <div class="row g-3">
                                        <div class="col-3">
                                            <input type="text" class="w-100 bg-white form-control form-control-sm"
                                                value="+62" disabled>
                                        </div>
                                        <div class="col-9">
                                            <input type="text" class="w-100 form-control form-control-sm"
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                        </div>
                                    </div>
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