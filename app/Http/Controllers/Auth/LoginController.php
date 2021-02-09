<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $data = [
            "CSS" => "/css/LoginStyle.css"
        ];
        return view("Auth/Login", $data);
    }
}
