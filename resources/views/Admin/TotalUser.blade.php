@extends('template/Admin')
@section("title", "Total User")

@section('content')
<div class="intoAdmin">
    <div class="container">
        <h1 class="text-white" style="margin-top: 10vh;">Hello, Selamat Bekerja</h1>
        <p class="mt-4 text-white" style="width: 50%;">Ini halaman anda untuk mengatur data semua pengguna, hati-hati dalam menghapus data</p>
    </div>
</div>
<div class="col-md-12">
    <div class="cardTableData mt-4">
        <div class="container">
            <div class="headerTable">
                <h5 class="mt-2">Tabel User</h5>
            </div>
        </div>
        <div id="contentTable">
            <table border="0" id="TableOrder" class="table table-hover mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Kode Pos</th>
                        <th>Negara</th>
                        <th>Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection