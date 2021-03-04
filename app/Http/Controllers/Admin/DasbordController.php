<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DasbordController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "JS" => "Dasbord.js",
            "token" => null,
            "session" => null,
            "CekStatus" => "Dasbord",
            "middleware" => "admin"
        ];

        return view("Admin/Dasbord", $data);
    }
}
