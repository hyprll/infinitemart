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
            "style" => "/css/LoginStyle.css"
        ];
        return view("Auth/Login", $data);
    }

    public function login_proses(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $ch = curl_init();

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/login");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            "email=$email&password=$password"
        );

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch);

        // tutup curl 
        curl_close($ch);

        // menampilkan hasil curl
        $result = json_decode($output, true);

        if ($result == null) {
            $request->session()->flash("error_login", "error");
            return redirect("/login");
        }

        if (!$result["success"]) {
            $request->session()->flash("error_pass", $result["message"]);
            return redirect("/login");
        }

        $authSession = [
            "token" => $result["token"],
            "data" => $result["data"]
        ];
        
        session(["auth_session" => $authSession]);
        return redirect("/");
    }

    public function register()
    {
        $data = [
            "style" => "/css/Register.css"
        ];
        return view("Auth/Register", $data);
    }

    public function regist_proses(Request $request)
    {
        $email = $request->email;
        $username = $request->username;
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $password = $request->password;
        $PhoneNumber = $request->phone;
        $postal_code = $request->postal_code;
        $kota = $request->city;
        $country_code = $request->country_code;
        $address = $request->address;

        $ch = curl_init();

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            "username=$username&email=$email&role=1&first_name=$firstName&last_name=$lastName&password=$password&phone=$PhoneNumber&city=$kota&postal_code=$postal_code&country_code=$country_code&address=$address"
        );

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch);

        // tutup curl 
        curl_close($ch);

        // menampilkan hasil curl
        $result = json_decode($output, true);

        if ($result == null) {
            $request->session()->flash("error_register", "error");
            return redirect("/register");
        }

        if (isset($result['code'])) {
            $request->session()->flash("sukses_register", "sukses");
            return redirect("/login");
        } else {
            $array_keys = array_keys($result);
            $i = 0;
            foreach ($result as $key) {
                $request->session()->flash("$array_keys[$i]_error_status", $key[0]);
                $i++;
            }
            return redirect("/register");
        }
    }

    public function seller()
    {
        $data = [
            "style" => "/css/Seller.css"
        ];
        return view("Auth/Seller", $data);
    }
}
