@extends('template/Admin')
@section("title", "Dashbord")

@section('content')
<div class="infoTopDasbord mt-3">
    <div class="headerDasbord d-flex justify-content-between">
        <h4 class="text-white">Dashbords</h4>
        <div class="btnTopDasbord mb-3">
            <button type="submit" class="btn">Terbaru</button>
            <button type="submit" class="btn">Filter</button>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-3">
            <div class="cardInfoDasbord mt-4">
                <div class="row">
                    <div class="col-md-7">
                        <div class="top-cardInfoDasbord d-flex flex-column">
                            <h5>Total Produk</h5>
                            <h4 class="TotalProduk">0</h4>
                            <div class="pertumbuhanUntung d-flex mt-2">
                                <i class="material-icons">trending_up</i>
                                <p style="font-size: 14px; margin-left: 1vw;">4.38%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end">
                        <a href="/totalProduk">
                            <div
                                class="rounded-circle iconInfoDasbord d-flex align-items-center justify-content-center">
                                <i class="material-icons text-white">queue</i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="underCard">
                    <div class="underCardLine"></div>
                    <p class="pt-1">Sejak bulan lalu</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="cardInfoDasbord mt-4">
                <div class="row">
                    <div class="col-md-7">
                        <div class="top-cardInfoDasbord d-flex flex-column">
                            <h5>Total User</h5>
                            <h4 class="TotalUser">0</h4>
                            <div class="pertumbuhanUntung d-flex mt-2">
                                <i class="material-icons">trending_up</i>
                                <p style="font-size: 14px; margin-left: 1vw;">4.38%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end">
                        <a href="/DataUser">
                            <div
                                class="rounded-circle iconInfoDasbord-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons noteIcon text-white">pie_chart</i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="underCard">
                    <div class="underCardLine mt-4"></div>
                    <p class="pt-1">Sejak bulan lalu</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="cardInfoDasbord mt-4">
                <div class="row">
                    <div class="col-md-7">
                        <div class="top-cardInfoDasbord d-flex flex-column">
                            <h5>Checkout</h5>
                            <h4 class="TotalCheckout">0</h4>
                            <div class="pertumbuhanUntung d-flex mt-2">
                                <i class="material-icons">trending_up</i>
                                <p style="font-size: 14px; margin-left: 1vw;">4.38%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end">
                        <a href="#">
                            <div
                                class="rounded-circle iconInfoDasbord-3 d-flex align-items-center justify-content-center">
                                <i class="material-icons noteIcon text-white">paid</i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="underCard">
                    <div class="underCardLine"></div>
                    <p class="pt-1">Sejak bulan lalu</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="cardInfoDasbord mt-4">
                <div class="row">
                    <div class="col-md-7">
                        <div class="top-cardInfoDasbord d-flex flex-column">
                            <h5>Penjual</h5>
                            <h4 class="TotalPenjual">0</h4>
                            <div class="pertumbuhanUntung d-flex mt-2">
                                <i class="material-icons">trending_up</i>
                                <p style="font-size: 14px; margin-left: 1vw;">2.38%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end">
                        <a href="#">
                            <div
                                class="rounded-circle iconInfoDasbord-4 d-flex align-items-center justify-content-center">
                                <i class="material-icons noteIcon text-white">volunteer_activism</i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="underCard">
                    <div class="underCardLine"></div>
                    <p class="pt-1">Sejak bulan lalu</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-md-12 mt-5">
    <div class="cardEmploye">
        <div class="headerEmploye">
            <h5>Data Checkout</h5>
        </div>
        <div class="contentEmploye mt-3">
            <table border="0">
                <thead>
                    <th class="text-center">No</th>
                    <th>Nama</th>
                    <th>Order Id</th>
                    <th>Total</th>
                    <th>No telepon</th>
                    <th>Tanggal</th>
                </thead>
                <tbody class="checkoutTable">

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection