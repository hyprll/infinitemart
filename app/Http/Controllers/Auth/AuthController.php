<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            "style" => "/css/LoginStyle.css",
            "middleware" => "not_auth"
        ];
        return view("Auth/Login2", $data);
    }

    public function register()
    {
        $data = [
            "style" => "/css/Register.css",
            "middleware" => "not_auth"
        ];
        return view("Auth/Register2", $data);
    }

    public function seller()
    {
        $data = [
            "style" => "/css/Seller.css",
            "middleware" => "no_store"
        ];
        return view("Auth/Seller2", $data);
    }
}
