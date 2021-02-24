<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        // $session = session()->get("auth_session");

        // $toko = [];
        // $ch = curl_init();

        // curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/toko");
        // //return the transfer as a string 
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // // $output contains the output string 
        // $output = curl_exec($ch);

        // $result = json_decode($output, true);
        // if ($result !== null) {
        //     $toko = ($result['success']) ? $result["data"] : [];
        // }
        // $trueKah = false;
        // $id_toko = 0;

        // foreach ($toko as $key) {
        //     if ($key['id_user'] == $session["data"]['id_user']) {
        //         $trueKah = true;
        //         $id_toko = $key["id_toko"];
        //     }
        // }

        $data = [
            "css" => "profile.css",
            "hasToko" => false
        ];

        return view("user/profile", $data);
    }
}
