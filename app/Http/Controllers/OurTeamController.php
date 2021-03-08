<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "css" => "OurTeam.css"
        ];
        return view("user/OurTeam", $data);
    }
}
