<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function detail($id)
    {
        $data = [
            "token" => null,
            "session" => null,
            "css" => "detail.css",
            "idProduk" => $id
        ];

        return view("user.detail", $data);
    }

    public function tambahProduk()
    {
        $data = [
            "token" => null,
            "session" => null,
            "css" => "tambahProduk.css"
        ];

        return view("user/tambahProduk", $data);
    }

    public function edit($id_produk)
    {
        $data = [
            "token" => null,
            "session" => null,
            "css" => "tambahProduk.css",
            "id_produk" => $id_produk
        ];

        return view("user/updateProduk", $data);
    }
}
