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
            "idProduk" => $id,
            "middleware" => "user"
        ];

        return view("user.detail2", $data);
    }

    public function tambahProduk()
    {
        $data = [
            "token" => null,
            "session" => null,
            "css" => "tambahProduk.css",
            "middleware" => "has_store"
        ];

        return view("user/tambahProduk2", $data);
    }

    public function edit($id_produk)
    {
        $data = [
            "token" => null,
            "session" => null,
            "css" => "tambahProduk.css",
            "id_produk" => $id_produk,
            "middleware" => "auth"
        ];

        return view("user/updateProduk", $data);
    }

    public function search(Request $request)
    {
        $key = $request->key;
        if ($key == null) {
            return abort(404);
        }
        $data = [
            "middleware" => "user",
            "keyword" => $key
        ];

        return view("user.search2", $data);
    }
}
