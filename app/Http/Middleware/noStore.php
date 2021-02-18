<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class noStore
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $session = session()->get("auth_session");
        $toko = [];
        $ch2 = curl_init();

        curl_setopt($ch2, CURLOPT_URL, "http://localhost:8080/toko");
        //return the transfer as a string 
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch2);

        $result2 = json_decode($output, true);
        if ($result2 !== null) {
            $toko = ($result2['success']) ? $result2["data"] : [];
        }
        $hasToko = false;
        $id_toko = 0;

        foreach ($toko as $key) {
            if ($key['id_user'] == $session["data"]['id_user']) {
                $hasToko = true;
                $id_toko = $key["id_toko"];
            }
        }

        if ($hasToko) {
            return redirect('toko/' . $id_toko);
        }
        return $next($request);
    }
}
