<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        $data = [
            "css" => "profile.css",
            "hasToko" => false,
            "middleware" => "auth"
        ];

        return view("user/profile2", $data);
    }

    public function history()
    {
        $data = [
            "css" => "profile.css",
            "middleware" => "auth"
        ];
        return view("user/history", $data);
    }
}
