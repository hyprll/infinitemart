<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TotalUserController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "JS" => "TotalUser.js",
            "token" => null,
            "session" => null,
            "CekStatus" => "DataUser"
        ];

        return view("Admin/TotalUser", $data);
    }
}
