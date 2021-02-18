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

        if (!$result["success"]) {
            return redirect("/");
        }
        
        
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
        $user = [];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/allbuyer");
        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch);

        $result = json_decode($output, true);

        if ($result != null) {
            ($result['success']) ? $user = $result["data"] : $user = [];
        }

        $toko = [];
        $ch2 = curl_init();

        curl_setopt($ch2, CURLOPT_URL, "http://localhost:8080/toko");
        //return the transfer as a string 
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch2);

        $result2 = json_decode($output, true);
        if ($result2 !== null) {
            $toko = ($result2['success']) ? $result2["data"] : [];
        }
        $id_toko = 0;

        foreach ($toko as $key) {
            if ($key['id_user'] == $session["data"]['id_user']) {
                $id_toko = $key["id_toko"];
            }
        }

        if ($session != null) {
            $data = [
                "token" => $session["token"],
                "session" => $session["data"],
                "css" => "tambahProduk.css",
                "user" => $user,
                "id_toko" => $id_toko
            ];
        } else {
            $data = [
                "token" => null,
                "session" => null,
                "css" => "tambahProduk.css",
                "user" => $user,
                "id_toko" => $id_toko
            ];
        }

        return view("user/tambahProduk", $data);
    }

    public function tambahProdukProses(Request $request)
    {
        $session = session()->get("auth_session");

        $namaProduk = $request->NamaProduk;
        $hargaProduk = $request->hargaProduk;
        $checkUser = $request->checkUser;
        $idToko = $request->id_toko;
        $userPermitted = "";

        if ($checkUser != null) {
            $exp_checkuser = explode(",", $checkUser);
            $i = 0;
            foreach ($exp_checkuser as $key) {
                if ($i != count($exp_checkuser) - 1) {
                    if ($i == count($exp_checkuser) - 2) {
                        $userPermitted .= $key;
                    } else {
                        $userPermitted .= $key . ",";
                    }
                }
                $i++;
            }
        }

        $post_field = [];

        // * Main Img
        $tmp_main_img = $_FILES["main_img"]['tmp_name'];
        $filename_main_img = basename($_FILES["main_img"]['name']);

        $post_field['gambar'] =  curl_file_create($tmp_main_img, $_FILES["main_img"]['type'], $filename_main_img);

        // * Main Img
        $tmp_other_img = $_FILES["other_img"]['tmp_name'];
        $filename_other_img = basename($_FILES["other_img"]['name']);

        $post_field['gambar_lain'] =  curl_file_create($tmp_other_img, $_FILES["other_img"]['type'], $filename_other_img);

        $post_field["nama_produk"] = $namaProduk;
        $post_field["harga"] = $hargaProduk;
        $post_field["user_beli"] = $namaProduk;
        $post_field["id_toko"] = $idToko;

        $authorization = "Authorization: Bearer " . $session["token"];
        $headers = [
            "Content-Type" => "multipart/form-data",
            $authorization
        ];

        $ch = curl_init();

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/produk/add");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            $post_field
        );

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch);

        // tutup curl 
        curl_close($ch);

        // menampilkan hasil curl
        $result = json_decode($output, true);

        if ($result == null) {
            $request->session()->flash("error_produk", "error");
            return redirect("/toko/add");
        }

        if (isset($result['success'])) {
            $request->session()->flash("sukses_produk", "sukses");
            return redirect("/toko/" . $idToko);
        } else {
            $array_keys = array_keys($result);
            $i = 0;
            foreach ($result as $key) {
                $request->session()->flash("$array_keys[$i]_error_status", $key[0]);
                $i++;
            }
            return redirect("/toko/add");
        }
    }
}
