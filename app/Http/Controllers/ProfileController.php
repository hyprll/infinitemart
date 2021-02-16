<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        $session = session()->get("auth_session");
        $data = [
            "token" => $session["token"],
            "session" => $session["data"],
            "css" => "profile.css"
        ];

        return view("user/profile", $data);
    }
}
