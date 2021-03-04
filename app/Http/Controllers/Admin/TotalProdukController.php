<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TotalProdukController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "JS" => "TotalProduk.js",
            "token" => null,
            "session" => null,
            "CekStatus" => "Product",
            "middleware" => "admin"
        ];

        return view("Admin/TotalProduk", $data);
    }
}
