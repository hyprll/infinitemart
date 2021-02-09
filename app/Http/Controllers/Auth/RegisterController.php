<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $data = [
            "CSS" => "/css/Register.css"
        ];
        return view("Auth/Register", $data);
    }
}
