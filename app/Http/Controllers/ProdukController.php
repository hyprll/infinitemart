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
        // $session = session()->get("auth_session");
        // $user = [];

        // // * Get all User
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/allbuyer");

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


        // $output = curl_exec($ch);

        // $result = json_decode($output, true);

        // if ($result != null) {
        //     ($result['success']) ? $user = $result["data"] : $user = [];
        // }

        // // * Get Id Toko
        // $toko = [];
        // $ch2 = curl_init();

        // curl_setopt($ch2, CURLOPT_URL, "http://localhost:8080/toko");

        // curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);


        // $output = curl_exec($ch2);

        // $result2 = json_decode($output, true);
        // if ($result2 !== null) {
        //     $toko = ($result2['success']) ? $result2["data"] : [];
        // }
        // $id_toko = 0;
        // foreach ($toko as $key) {
        //     if ($key['id_user'] == $session["data"]['id_user']) {
        //         $id_toko = $key["id_toko"];
        //     }
        // }

        // $id_toko = 0;
        // foreach ($toko as $key) {
        //     if ($key['id_user'] == $session["data"]['id_user']) {
        //         $id_toko = $key["id_toko"];
        //     }
        // }

        // // * Get Produk by Id
        // $produk = [];
        // $ch3 = curl_init();

        // curl_setopt($ch3, CURLOPT_URL, "http://localhost:8080/produk/" . $id_produk);

        // curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);


        // $output = curl_exec($ch3);
        // $user_permitted = [];

        // $result3 = json_decode($output, true);
        // if ($result3 !== null) {
        //     $produk = ($result3['success']) ? $result3["data"][0] : [];
        //     if ($result3["success"]) {
        //         // * cek apakah produk ini milik toko ini
        //         if ($produk['id_toko'] != $id_toko) {
        //             return redirect("/toko/" . $id_toko);
        //         } else {
        //             $user_permitted = explode(",", $produk['user_beli']);
        //         }
        //     }
        // }

        $data = [
            "token" => null,
            "session" => null,
            "css" => "tambahProduk.css",
            "id_produk" => $id_produk
        ];

        return view("user/updateProduk", $data);
    }

    public function editProdukProses(Request $request)
    {
        $session = session()->get("auth_session");
        $namaProduk = $request->NamaProduk;
        $hargaProduk = $request->hargaProduk;
        $checkUser = $request->checkUser;
        $idToko = $request->id_toko;
        $idProduk = $request->id_produk;
        $gambar = $request->gambar;
        $gambar_lain = $request->gambar_lain;

        $post_field = [];
        $post_field['gambar_old'] = $gambar;
        $post_field['gambar_lain_old'] = $gambar_lain;
        // * Main Img
        if ($_FILES["main_img"]['error'] !== 4) {
            $tmp_main_img = $_FILES["main_img"]['tmp_name'];
            $filename_main_img = basename($_FILES["main_img"]['name']);

            $post_field['gambar'] =  curl_file_create($tmp_main_img, $_FILES["main_img"]['type'], $filename_main_img);
        }

        // * Other Img
        if ($_FILES["other_img"]['error'] !== 4) {
            $tmp_other_img = $_FILES["other_img"]['tmp_name'];
            $filename_other_img = basename($_FILES["other_img"]['name']);

            $post_field['gambar_lain'] =  curl_file_create($tmp_other_img, $_FILES["other_img"]['type'], $filename_other_img);
        }

        $post_field["nama_produk"] = $namaProduk;
        $post_field["harga"] = $hargaProduk;
        $post_field["user_beli"] = $checkUser;
        $post_field["id_toko"] = $idToko;
        $post_field["id_produk"] = $idProduk;

        $authorization = "Authorization: Bearer " . $session["token"];
        $headers = [
            "Content-Type" => "multipart/form-data",
            $authorization
        ];

        $ch = curl_init();

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/produk/update");
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
            $request->session()->flash("error_update_produk", "error");
            return redirect("/toko/edit/" . $idProduk);
        }

        if (isset($result['success'])) {
            $request->session()->flash("sukses_update_produk", "sukses");
            return redirect("/toko/" . $idToko);
        } else {
            $array_keys = array_keys($result);
            $i = 0;
            foreach ($result as $key) {
                $request->session()->flash("$array_keys[$i]_error_status", $key[0]);
                $i++;
            }
            return redirect("/toko/edit/" . $idProduk);
        }
    }
}
