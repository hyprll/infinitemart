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

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


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

            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);


            $output = curl_exec($ch2);

            $result = json_decode($output, true);

            if ($result != null) {
                ($result['success']) ? $toko = $result["data"] : $toko = [];
            }
        }

        $ch3 = curl_init();

        curl_setopt($ch3, CURLOPT_URL, "http://localhost:8080/produk");

        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);


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
                "produkAll" => $produkAll,
                "idProduk" => $id
            ];
        } else {
            $data = [
                "token" => null,
                "session" => null,
                "css" => "detail.css",
                "produk" => $produk,
                "toko" => $toko,
                "produkAll" => $produkAll,
                "idProduk" => $id
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

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


        $output = curl_exec($ch);

        $result = json_decode($output, true);

        if ($result != null) {
            ($result['success']) ? $user = $result["data"] : $user = [];
        }

        $toko = [];
        $ch2 = curl_init();

        curl_setopt($ch2, CURLOPT_URL, "http://localhost:8080/toko");

        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);


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

        // * Other Img
        $tmp_other_img = $_FILES["other_img"]['tmp_name'];
        $filename_other_img = basename($_FILES["other_img"]['name']);

        $post_field['gambar_lain'] =  curl_file_create($tmp_other_img, $_FILES["other_img"]['type'], $filename_other_img);

        $post_field["nama_produk"] = $namaProduk;
        $post_field["harga"] = $hargaProduk;
        $post_field["user_beli"] = $userPermitted;
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

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
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

    public function delete_produk(Request $request)
    {
        $session = session()->get("auth_session");

        $id_produk = $request->id_produk;
        $id_toko = $request->id_toko;


        // * cek apakah produk ini dimiliki oleh toko
        $ch = curl_init();

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/produk/" . $id_produk);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($output, true);
        if ($result != null) {
            if ($result['success']) {
                if ($result['data'][0]["id_toko"] != $id_toko) {
                    return redirect("toko/" . $id_toko);
                }
            }
        }

        // * Delete Produk
        $ch = curl_init();
        $authorization = "Authorization: Bearer " . $session["token"];
        $headers = [
            $authorization
        ];

        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/produk/delete?id_produk=" . $id_produk);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);

        $result = json_decode($output, true);
        $request->session()->flash("sukses_delete_produk", "sukses");

        return redirect("/toko/" . $id_toko);
    }

    public function edit($id_produk)
    {
        $session = session()->get("auth_session");
        $user = [];

        // * Get all User
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/allbuyer");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


        $output = curl_exec($ch);

        $result = json_decode($output, true);

        if ($result != null) {
            ($result['success']) ? $user = $result["data"] : $user = [];
        }

        // * Get Id Toko
        $toko = [];
        $ch2 = curl_init();

        curl_setopt($ch2, CURLOPT_URL, "http://localhost:8080/toko");

        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);


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

        $id_toko = 0;
        foreach ($toko as $key) {
            if ($key['id_user'] == $session["data"]['id_user']) {
                $id_toko = $key["id_toko"];
            }
        }

        // * Get Produk by Id
        $produk = [];
        $ch3 = curl_init();

        curl_setopt($ch3, CURLOPT_URL, "http://localhost:8080/produk/" . $id_produk);

        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);


        $output = curl_exec($ch3);
        $user_permitted = [];

        $result3 = json_decode($output, true);
        if ($result3 !== null) {
            $produk = ($result3['success']) ? $result3["data"][0] : [];
            if ($result3["success"]) {
                // * cek apakah produk ini milik toko ini
                if ($produk['id_toko'] != $id_toko) {
                    return redirect("/toko/" . $id_toko);
                } else {
                    $user_permitted = explode(",", $produk['user_beli']);
                }
            }
        }

        $data = [
            "token" => $session["token"],
            "session" => $session["data"],
            "css" => "tambahProduk.css",
            "user" => $user,
            "id_toko" => $id_toko,
            "produk" => $produk,
            "user_permitted" => $user_permitted
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
