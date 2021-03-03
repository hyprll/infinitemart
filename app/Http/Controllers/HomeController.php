<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "token" => null,
            "session" => null,
            "css" => "home.css"
        ];

        return view("user/home", $data);
    }

    public function toko($id)
    {
        $data = [
            "token" => null,
            "session" => null,
            "css" => "dashboard.css",
            "idToko" => $id
        ];

        return view("user/toko", $data);
    }
}
