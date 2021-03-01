@extends('template.User')

@section('title', "Detail Sweet Home")

@section('content')

<!-- Content -->
<div class="container mt-5 root">
    <div class="row d-none">
        <span id="idProduk" data-idproduk="{{$idProduk}}"></span>
    </div>
    <div class="row">
        <div class="col-md-8">

            <div class="cardDetail-sideLeft">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="DetailImg-Barang d-flex justify-content-center">
                                <img class="img-fluid" id="img-produk">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <img class="w-100" id="img-produk-lainnya">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="DetailPenjelasan-Barang">
                            <div class="container">
                                <div class="headerDetail-Penjelasan my-3">
                                    <h3 class="fw-bold" id="produkName">
                                    </h3>
                                </div>
                                <div class="infoHarga mt-2">
                                    <h4 class="text-danger fw-bold mb-3" id="produkFare"></h4>
                                    <div class="d-flex flex-column">
                                        <div class="underText">
                                            <p>Stok Tersedia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="setKuantitas d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="mt-1">Kuantitas</span>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <input type="text" class="form-control form-control-sm w-100" value="1"
                                            id="kuantitas"
                                            onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                    </div>
                                </div>
                                <div class="w-100 text-end">
                                    <small class="text-danger validation-payment">

                                    </small>
                                </div>
                                <div class="setKuantitas mt-3 justify-content-between align-items-center" id="catatan"
                                    style="display: none">
                                    <div>
                                        <span class="mt-1">Catatan</span>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <input type="text" class="form-control form-control-sm w-100" id="catatanInp">
                                    </div>
                                </div>
                                <div class="w-100 text-end">
                                    <small class="text-danger validation-payment">

                                    </small>
                                </div>
                                <div class="btnPayment mt-3 d-flex justify-content-between">
                                    <button class="btn btn-payment" id="btn-payment">Beli Sekarang</button>
                                    <button class="btn btn-payment" id="btn-payment-ready" style="display: none">Beli
                                        Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="row">

                <div class="col-md-12">
                    <div class="cardDetail-sideRight">
                        <div class="cardToko ">
                            <div class="container d-flex flex-column">
                                <div class="imgTopToko d-flex justify-content-center">
                                    <img class="img-fluid rounded-circle mb-3" id="logoToko" alt="">
                                </div>
                                <div class="contentToko d-flex justify-content-center">
                                    <a class="text-center" id="tokoName"></a>
                                </div>
                                <div class="locationToko d-flex flex-column mt-3">
                                    <span class="text-center">
                                        <i class="fas fa-map-marker-alt"
                                            style="margin-left: 1.2%; margin-right: 2%;"></i>
                                        Downtown, Los Angeles
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container mt-5 root">

    <div class="row">
        <h3>Barang Lainnya</h3>
        <hr>
    </div>

    <div class="row" id="produkPlace"></div>

</div>

<!-- /Content -->

@endsection