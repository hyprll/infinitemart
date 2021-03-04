@extends('template.User')

@section('title', "Toko Sweet | InfiniteMart")

@section('content')

<!-- * Header -->

<div class="headerCarousel3 root">
    {{-- <img src="http://localhost:8080/uploads/toko/{{$toko['background']}}" class="w-100 img-fluid"
    id="background-img"> --}}
    <img class="w-100 img-fluid" id="background-img">
</div>

<!-- /Header -->

<div class="container root">
    <div class="col-md-12 d-none"><span id="idToko" data-idtoko="{{$idToko}}">{{$idToko}}</span></div>
    <div class="col-md-12">
        <div class="infoHeader" id="kontent-toko"></div>
    </div>
</div>

<div class="container mt-3 root">
    <div class="row">
        <h3 class="header-toko-text">Barang Di Toko</h3>
        <hr>
    </div>
    <div class="row" id="produkTokoPlace"></div>
    <div class="row" id="historyToko" style="display: none">
        <div class="container">
            <table class="table table table-bordered table-striped table-hover table-responsive" id="tableCheckout" style="font-family: Roboto;font-weight:500 ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Order Id</th>
                        <th>Total</th>
                        <th>No telepon</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody class="checkoutTable">

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection