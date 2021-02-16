<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $session = session()->get("auth_session");

        if ($session != null) {
            $data = [
                "token" => $session["token"],
                "session" => $session["data"],
                "css" => "home.css"
            ];
        } else {
            $data = [
                "token" => null,
                "session" => null,
                "css" => "home.css"
            ];
        }

        return view("user/home", $data);
    }
}
