<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "JS" => "Profile.js",
            "token" => null,
            "session" => null,
            "CekStatus" => "Profile",
            "middleware" => "admin"
        ];

        return view("Admin/Profile", $data);
    }
}
