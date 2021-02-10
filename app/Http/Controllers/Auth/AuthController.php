<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            "style" => "/css/LoginStyle.css"
        ];
        return view("Auth/Login", $data);
    }

    public function register()
    {
        $data = [
            "style" => "/css/Register.css"
        ];
        return view("Auth/Register", $data);
    }

    public function seller()
    {
        $data = [
            "style" => "/css/Seller.css"
        ];
        return view("Auth/Seller", $data);
    }
}