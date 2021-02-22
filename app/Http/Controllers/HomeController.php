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

    public function updateToko(Request $request)
    {
        $session = session()->get("auth_session");
        $old_logo = $request->old_logo;
        $old_bg = $request->old_bg;
        $namaToko = $request->namaToko;
        $deskripsi = $request->deskripsi;
        $idToko = $request->id_toko;

        $post_field = [];
        $post_field['logo_old'] = $old_logo;
        $post_field['bg_old'] = $old_bg;

        // * Logo Img
        if ($_FILES["logo"]['error'] !== 4) {
            $tmp_logo = $_FILES["logo"]['tmp_name'];
            $filename_logo = basename($_FILES["logo"]['name']);

            $post_field['logo'] =  curl_file_create($tmp_logo, $_FILES["logo"]['type'], $filename_logo);
        }

        // * bg Img
        if ($_FILES["background"]['error'] !== 4) {
            $tmp_background = $_FILES["background"]['tmp_name'];
            $filename_background = basename($_FILES["background"]['name']);

            $post_field['background'] =  curl_file_create($tmp_background, $_FILES["background"]['type'], $filename_background);
        }

        $post_field["nama_toko"] = $namaToko;
        $post_field["deskripsi"] = $deskripsi;
        $post_field["id_toko"] = $idToko;

        $authorization = "Authorization: Bearer " . $session["token"];
        $headers = [
            "Content-Type" => "multipart/form-data",
            $authorization
        ];

        $ch = curl_init();

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/toko/update");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            $post_field
        );

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($output, true);

        if ($result == null) {
            $request->session()->flash("error_update_toko", "error");
            return redirect("toko/" . $idToko);
        }

        if (isset($result['success'])) {
            $request->session()->flash("sukses_update_toko", "sukses");
            return redirect("toko/" . $idToko);
        } else {
            $request->session()->flash("error_update_toko", "error");
            $array_keys = array_keys($result);
            $i = 0;
            foreach ($result as $key) {
                $request->session()->flash("$array_keys[$i]_error_status", $key[0]);
                $i++;
            }
            return redirect("toko/" . $idToko);
        }
    }
}
