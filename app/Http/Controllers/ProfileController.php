<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        $data = [
            "css" => "profile.css",
            "hasToko" => false
        ];

        return view("user/profile", $data);
    }
}
