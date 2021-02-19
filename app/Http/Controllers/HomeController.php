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

        if ($result != null) {
            ($result['success']) ? $produk = $result["data"] : $produk = [];
        }

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

    public function toko($id)
    {
        $session = session()->get("auth_session");
        $toko = [];
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/toko/" . $id);
        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch);
        $result = json_decode($output, true);
        if ($result !== null) {
            $result['success'] ? $toko = $result['data'][0] : $toko = [];
        }

        if (!$result["success"]) {
            return redirect(url("/"));
        }

        // * Get produk by toko
        $produk = [];
        $ch2 = curl_init();

        curl_setopt($ch2, CURLOPT_URL, "http://localhost:8080//produk/toko/" . $id);
        //return the transfer as a string 
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch2);
        $result = json_decode($output, true);
        if ($result !== null) {
            $result['success'] ? $produk = $result['data'] : $produk = [];
        }

        if ($session != null) {
            $data = [
                "token" => $session["token"],
                "session" => $session["data"],
                "css" => "dashboard.css",
                "toko" => $toko,
                "produk" => $produk
            ];
        } else {
            $data = [
                "token" => null,
                "session" => null,
                "css" => "dashboard.css",
                "toko" => $toko,
                "produk" => $produk
            ];
        }

        return view("user/toko", $data);
    }
}
