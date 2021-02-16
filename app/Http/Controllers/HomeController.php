<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $session = session()->get("auth_session");

        $produk = [];
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/produk");
        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch);

        $result = json_decode($output, true);

        ($result['success']) ? $produk = $result["data"] : $produk = [];
        // dd($produk);

        if ($session != null) {
            $data = [
                "token" => $session["token"],
                "session" => $session["data"],
                "css" => "home.css",
                "produk" => $produk
            ];
        } else {
            $data = [
                "token" => null,
                "session" => null,
                "css" => "home.css",
                "produk" => $produk
            ];
        }

        return view("user/home", $data);
    }
}
