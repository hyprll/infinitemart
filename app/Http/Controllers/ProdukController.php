<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function detail()
    {
        $session = session()->get("auth_session");

        if ($session != null) {
            $data = [
                "token" => $session["token"],
                "session" => $session["data"],
                "css" => "detail.css"
            ];
        } else {
            $data = [
                "token" => null,
                "session" => null,
                "css" => "detail.css"
            ];
        }

        return view("user.detail", $data);
    }
}
