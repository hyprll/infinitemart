<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Validator;
use Illuminate\Support\Facades\Hash;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Firebase\JWT\ExpiredException;
use App\Http\Controllers\Controller;

class ApiCheckoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function checkoutbyid($id_checkout)
    {
        $checkout = Checkout::where("id_checkout", $id_checkout)->get();

        if ($checkout->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => "Data not found."
            ], 400);
        }

        return response()->json([
            'success' => true,
            'message' => "Data found.",
            'data' => $checkout
        ], 200);
    }

    public function checkoutbyidtoko($id_toko)
    {
        $checkout = Checkout::where("checkout.id_toko", $id_toko)
            ->join("produk", "produk.id_produk", "=", "checkout.id_produk")
            ->select("checkout.*", "produk.nama_produk", "produk.gambar")
            ->get();

        if ($checkout->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => "Data not found."
            ], 400);
        }

        return response()->json([
            'success' => true,
            'message' => "Data found.",
            'data' => $checkout
        ], 200);
    }

    public function checkoutbyiduser($id_user)
    {
        $checkout = Checkout::where("checkout.id_user", $id_user)
            ->join("produk", "produk.id_produk", "=", "checkout.id_produk")
            ->select("checkout.*", "produk.nama_produk", "produk.gambar")
            ->get();

        if ($checkout->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => "Data not found."
            ], 400);
        }

        return response()->json([
            'success' => true,
            'message' => "Data found.",
            'data' => $checkout
        ], 200);
    }

    public function checkoutbyidproduk($id_produk)
    {
        $checkout = Checkout::where("id_produk", $id_produk)->get();

        if ($checkout->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => "Data not found."
            ], 400);
        }

        return response()->json([
            'success' => true,
            'message' => "Data found.",
            'data' => $checkout
        ], 200);
    }

    public function checkoutall()
    {

        $checkout = Checkout::all();

        if ($checkout->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => "Data not found."
            ], 400);
        }

        return response()->json([
            'success' => true,
            'message' => "Data found.",
            'data' => $checkout
        ], 200);
    }

    public function create(Request $request)
    {
        $input  = $request->only("id_produk", "id_user", "id_toko", "tanggal", "deskripsi", "total", "status", "jenis_pembayaran"); //Specify Request

        $validation = Validator::make($input, [
            "id_produk" => "required|integer",
            "id_user" => "required|integer",
            "id_toko" => "required|integer",
            "tanggal" => "required|string",
            "deskripsi" => "required|string",
            "total" => "required|integer",
            "status" => "required|integer",
            "jenis_pembayaran" => "required|string",
        ]);

        if ($validation->fails()) {
            return response($validation->errors()->toJson(), 400);
        }

        $data = Checkout::create($input);

        if ($data) {
            $message = "Data successfully created.";
        } else {
            $message = "Data failed created.";
        }

        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ], 200);
    }

    public function delete(Request $request)
    {
        $delete = Checkout::where('id_checkout', $request->id_checkout)->delete();

        return response()->json([
            'success' => true,
            'message' => "Data successfully deleted.",
        ], 200);
    }
}
