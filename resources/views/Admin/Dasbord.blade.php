@extends('template/Admin')
@section("title", "Dasbord")

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
                            <div class="rounded-circle iconInfoDasbord d-flex align-items-center justify-content-center">
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
                            <div class="rounded-circle iconInfoDasbord-2 d-flex align-items-center justify-content-center">
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
                            <h4 class="TotalCheckout">29</h4>
                            <div class="pertumbuhanUntung d-flex mt-2">
                                <i class="material-icons">trending_up</i>
                                <p style="font-size: 14px; margin-left: 1vw;">4.38%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end">
                        <a href="#">
                            <div class="rounded-circle iconInfoDasbord-3 d-flex align-items-center justify-content-center">
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
                            <div class="rounded-circle iconInfoDasbord-4 d-flex align-items-center justify-content-center">
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

<div class="row mt-5">
    <div class="col-md-7">
        <div class="cardChart-1">
            <div class="lineCharts">
                <div class="headerChart d-flex justify-content-between mb-3">
                    <div class="leftSide-Chart">
                        <p class="text-light" style="font-size: 13px; letter-spacing: 1px;">Gambaran</p>
                        <h5 class="text-white">Total Pendapatan</h5>
                    </div>
                    <div class="rightSide-Chart d-flex align-items-center">
                        <button type="submit" class="btn">Bulan</button>
                        <button type="submit" class="btn">Minggu</button>
                    </div>
                </div>
            </div>
            <div id="chart-1" class="mt-3"></div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="cardChart-2">
            <div class="lineCharts-2">
                <div class="headerChart mb-3">
                    <div class="leftSide-Chart">
                        <p class="text-secondary" style="font-size: 13px; letter-spacing: 1px;">Kinerja</p>
                        <h5 class="text-secondary">Total Produk, User, Penjual</h5>
                    </div>
                </div>
            </div>
            <div id="chart-2" class="mt-3"></div>
        </div>
    </div>
</div>

<div class="col-md-12 mt-5">
    <div class="cardEmploye">
        <div class="headerEmploye">
            <h5>Petinggi Perusahaan</h5>
        </div>
        <div class="contentEmploye mt-3">
            <table border="0">
                <thead>
                    <th class="text-center">No</th>
                    <th>Nama</th>
                    <th>Gaji</th>
                    <th>Jabatan</th>
                    <th>Negara</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Muhammad Raqwan</td>
                        <td>Rp. 100.000.000 </td>
                        <td>CEO</td>
                        <td>Indonesia</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Rizky Ramadhan</td>
                        <td>Rp. 100.000.000 </td>
                        <td>CTO</td>
                        <td>Indonesia</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Pancaran Ratna</td>
                        <td>Rp. 100.000.000 </td>
                        <td>CFO</td>
                        <td>Indonesia</td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Muhammad Akbar</td>
                        <td>Rp. 100.000.000 </td>
                        <td>COO</td>
                        <td>Indonesia</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection