<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index()
    {
        $data = [
            "CSS" => "/css/Seller.css"
        ];
        return view("Auth/Seller", $data);
    }
}
