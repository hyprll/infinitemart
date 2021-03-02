<?php

use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;

// Admin

use App\Http\Controllers\Admin\DasbordController;
use App\Http\Controllers\Admin\TotalProdukController;
use App\Http\Controllers\Admin\TotalUserController;
use App\Http\Controllers\Admin\ProfileController as ProfileAdmin;

// API
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiCheckoutController;
use App\Http\Controllers\ApiMidtransController;
use App\Http\Controllers\ApiProdukController;
use App\Http\Controllers\ApiTokoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::group(["middleware" => ["auth.q"]], function () {
// });
Route::get("/profile", [ProfileController::class, "index"])->name("profile");
Route::post("/logout", [AuthController::class, "logout"])->name("logout");

Route::group(["prefix" => "toko", "middleware" => ["auth.q", "hasStore"]], function () {
    Route::post("/updateToko", [HomeController::class, "updateToko"])->name("updateToko");
    Route::post('/add', [ProdukController::class, "tambahProdukProses"])->name("tambahProdukProses");
    Route::post('/edit', [ProdukController::class, "editProdukProses"])->name("editProdukProses");
    Route::post('/delete', [ProdukController::class, "delete_produk"]);
});


Route::get("/seller", [AuthController::class, "seller"])->name("seller");
Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/detail/{id}', [ProdukController::class, "detail"]);
Route::get('/toko/add', [ProdukController::class, "tambahProduk"])->name("tambahProduk");
Route::get('/toko/{id}', [HomeController::class, "toko"]);
Route::get('toko/edit/{id_produk}', [ProdukController::class, "edit"]);

Route::group(["middleware" => ["not_auth.q"]], function () {
    Route::get("/login", [AuthController::class, "login"])->name("login");
    Route::post("/login", [AuthController::class, "login_proses"])->name("login_proses");
    Route::get("/register", [AuthController::class, "register"])->name("register");
    Route::post("/register", [AuthController::class, "regist_proses"])->name("regist_proses");
});




// API
Route::post("/api/login", [ApiAuthController::class, "login"])->name("apilogin");
Route::post("/api/register", [ApiAuthController::class, "register"])->name("apiregister");
Route::get("/api/cektoko/{id_user}", [ApiAuthController::class, "cektoko"])->name("apicektoko");
Route::get("/api/allbuyer", [ApiAuthController::class, "allbuyer"])->name("apiallbuyer");

Route::get("/api/toko/{id_toko}", [ApiTokoController::class, "tokobyid"])->name("apitokobyid");
Route::get("/api/toko", [ApiTokoController::class, "tokoall"])->name("apitokoall");
<<<<<<< HEAD
Route::group(["prefix" => "api/toko", "middleware" => ["jwtverify.auth"]], function() use ($router){
=======
Route::group(["prefix" => "api/toko", "middleware" => ["jwtadmin.auth"]], function () use ($router) {
>>>>>>> 5d6c74d7c7f072a845da951ca351e9886db95bee
    Route::post("/add", [ApiTokoController::class, "create"])->name("apicreatetoko");
    Route::post("/update", [ApiTokoController::class, "update"])->name("apiupdatetoko");
});

Route::get("/api/produk/{id_produk}", [ApiProdukController::class, "produkbyid"])->name("apiprodukbyid");
Route::get("/api/produk/toko/{id_toko}", [ApiProdukController::class, "produkbyidtoko"])->name("apiprodukbyidtoko");
Route::get("/api/produk", [ApiProdukController::class, "produkall"])->name("apiprodukall");
Route::get("/api/findproduk", [ApiProdukController::class, "find"])->name("apifindproduk");

<<<<<<< HEAD
Route::group(["prefix" => "api/produk", "middleware" => ["jwtverify.auth"]], function() use ($router){
=======
Route::group(["prefix" => "api/produk", "middleware" => ["jwtadmin.auth"]], function () use ($router) {
>>>>>>> 5d6c74d7c7f072a845da951ca351e9886db95bee
    Route::post("/add", [ApiProdukController::class, "create"])->name("apicreateproduk");
    Route::post("/update", [ApiProdukController::class, "update"])->name("apiupdateproduk");
    Route::delete("/delete", [ApiProdukController::class, "delete"])->name("apideleteproduk");
});

Route::get("/api/checkout/all", [ApiCheckoutController::class, "checkoutall"])->name("apicheckoutall");
Route::get("/api/checkout/toko/{id_toko}", [ApiCheckoutController::class, "checkoutbyidtoko"])->name("apicheckoutbyidtoko");
Route::get("/api/checkout/produk/{id_produk}", [ApiCheckoutController::class, "checkoutbyidproduk"])->name("apicheckoutbyidproduk");
Route::get("/api/checkout/user/{id_user}", [ApiCheckoutController::class, "checkoutbyiduser"])->name("apicheckoutbyiduser");
Route::get("/api/checkout/{id_checkout}", [ApiCheckoutController::class, "checkoutbyid"])->name("apicheckoutbyid");

<<<<<<< HEAD
Route::group(["prefix" => "api/checkout", "middleware" => ["jwtverify.auth"]], function() use ($router){
=======
Route::group(["prefix" => "api/checkout", "middleware" => ["jwtadmin.auth"]], function () use ($router) {
>>>>>>> 5d6c74d7c7f072a845da951ca351e9886db95bee
    Route::post("/add", [ApiCheckoutController::class, "create"])->name("apicreatecheckout");
    Route::post("/update", [ApiCheckoutController::class, "update"])->name("apiupdatecheckout");
    Route::delete("/delete", [ApiCheckoutController::class, "delete"])->name("apideletecheckout");
});

<<<<<<< HEAD
Route::group(["prefix" => "api/payment", "middleware" => ["jwtverify.auth"]], function() use ($router){
=======
Route::group(["prefix" => "api/payment", "middleware" => ["jwtadmin.auth"]], function () use ($router) {
>>>>>>> 5d6c74d7c7f072a845da951ca351e9886db95bee
    Route::post("/midtrans", [ApiMidtransController::class, "getSnapToken"])->name("apigetSnapToken");
});

Route::get("/dasbord", [DasbordController::class, "index"]);
Route::get("/profileAdmin", [ProfileAdmin::class, "index"]);
Route::get("/totalProduk", [TotalProdukController::class, "index"]);
Route::get("/DataUser", [TotalUserController::class, "index"]);
