<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function detail($id)
    {
        $session = session()->get("auth_session");

        $produk = [];
        $toko = [];
        $produkAll = [];
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/produk/" . $id);
        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch);

        $result = json_decode($output, true);

        if ($result != null) {
            ($result['success']) ? $produk = $result["data"] : $produk = [];
        }
        // dd($produk);
        if (count($produk) > 0) {
            $ch2 = curl_init();

            curl_setopt($ch2, CURLOPT_URL, "http://localhost:8080/toko/" . $produk[0]["id_toko"]);
            //return the transfer as a string 
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);

            // $output contains the output string 
            $output = curl_exec($ch2);

            $result = json_decode($output, true);

            if ($result != null) {
                ($result['success']) ? $toko = $result["data"] : $toko = [];
            }
        }

        $ch3 = curl_init();

        curl_setopt($ch3, CURLOPT_URL, "http://localhost:8080/produk");
        //return the transfer as a string 
        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch3);

        $result = json_decode($output, true);

        if ($result != null) {
            ($result['success']) ? $produkAll = $result["data"] : $produkAll = [];
        }

        if ($session != null) {
            $data = [
                "token" => $session["token"],
                "session" => $session["data"],
                "css" => "detail.css",
                "produk" => $produk,
                "toko" => $toko,
                "produkAll" => $produkAll
            ];
        } else {
            $data = [
                "token" => null,
                "session" => null,
                "css" => "detail.css",
                "produk" => $produk,
                "toko" => $toko,
                "produkAll" => $produkAll
            ];
        }

        return view("user.detail", $data);
    }

    public function tambahProduk()
    {
        $session = session()->get("auth_session");

        if ($session != null) {
            $data = [
                "token" => $session["token"],
                "session" => $session["data"],
                "css" => "tambahProduk.css"
            ];
        } else {
            $data = [
                "token" => null,
                "session" => null,
                "css" => "tambahProduk.css"
            ];
        }

        return view("user/tambahProduk", $data);
    }
}
