@extends('template.User')

@section('title', "Tambah Produk Sweet Home")

@section('content')

<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_produk" id="id_produk" value="{{$id_produk}}">
    <input type="hidden" name="id_toko" id="id_toko">
    
    <div class="container mt-5" id="headTambahProdukContent"></div>
    <div class="container" id="contentTambahProduk"></div>
</form>

@endsection